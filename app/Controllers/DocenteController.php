<?php

namespace App\Controllers;

//use App\Forms\DocenteForm;
use App\Models\Docente;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\Usuario;
use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class DocenteController extends BaseController
{

    public function registroAction()
    {
        if ($this->post) {
            $docente = new Docente();
            if ($docente->register($this->post)) {
                Session::set('message', ['type' => 'success', 'message' => 'Docente registrado correctamente']);

                View::redirect('/docente/registro');
            } else {
                Session::set('message', ['type' => 'danger', 'message' => 'Error la cedula del docente ya existe']);

            }
        }

        $pastores = Pastor::get()->all();
        $ministerios = Ministerio::get()->all();

        $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre', 'turno']);
        $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m', 'lider_ministerio']);
        // $ministeriosOptions = Util::renderOptions($ministerios, 'id', 'nombre_m');

        View::render('docente.php', [
            'pastoresOptions' => $pastoresOptions,
            'ministeriosOptions' => $ministeriosOptions
        ]);


    }


    public function consultaAction()
    {
        if(isset($this->params['search'])){
            $docentes = Docente::get()
                ->where(['cedula' => $this->params['search']],'LIKE')
                ->orWhere(['nombre' => $this->params['search']],'LIKE')
                ->orWhere(['apellido' => $this->params['search']],'LIKE')
                ->orWhere(['email' => $this->params['search']],'LIKE')
                ->all();
        }else{
            $docentes = Docente::get()->all();

        }

        View::render('docenteconsulta.php', [
            'docentes' => $docentes,
        ]);
    }


    public function modificarAction()
    {
        $id = $_GET['id'];

        $docente = new Docente();
        if ($this->post) {
            $docente->update($id, $this->post);
            Session::set('message', ['type' => 'success', 'message' => 'Docente actualizado correctamente']);
            View::redirect('/docente/consulta');
        }

        $docente = Docente::get()->where(['id' => $id])->one();

        if ($docente) {

            $pastores = Pastor::get()->all();
            $ministerios = Ministerio::get()->all();
            $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre', 'turno'], $docente->pastor->id);
            $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m', 'lider_ministerio'], $docente->ministerio->id);

            View::render('docentemodificar.php', [
                'docente' => $docente,
                'pastoresOptions' => $pastoresOptions,
                'ministeriosOptions' => $ministeriosOptions
            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El docente $id no existe"]);
        View::redirect('/app/index');

    }

    public function eliminarAction()
    {
        $id = $_GET['id'];

        if ($id) {
            $docente = Docente::get()->where(['id' => $id])->one();
            $docente->delete();
            Session::set('message', ['type' => 'success', 'message' => 'Docente eliminado correctamente']);
            View::redirect('/docente/consulta');
        }

    }


}