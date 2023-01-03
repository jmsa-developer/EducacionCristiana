<?php

namespace App\Controllers;

//use App\Forms\EducativoForm;
use App\Models\Educativo;
use App\Tools\Session;
use App\Tools\View;


// Controlador principal de la aplicacion
class EducativoController extends BaseController
{


    public function registroAction()
    {

        if ($this->post) {
            $educativo = new Educativo();
            if ($educativo->register($this->post)) {
                Session::set('message', ['type' => 'success', 'message' => 'Tema registrado correctamente']);

                View::redirect('/educativo/registro');
            } else {
                Session::set('message', ['type' => 'danger', 'message' => 'Error  del educativo ya existe']);

            }
        }

        View::render('educativo.php', [
        ]);

    }


    public function consultaAction()
    {
        if(isset($this->params['search'])){
            $educativo = Educativo::get()
            ->where(['nombre' => $this->params['search']],'LIKE')
            ->all();
        }else{
            $educativo = Educativo::get()->all();

        }

        View::render('educativoconsulta.php', [
            'educativo' => $educativo,
        ]);
    }

    public function descargarAction()
    {
        $id = $_GET['id'];

        if($id){
            $educativo = Educativo::get()->where(['id'=>$id])->one();
            $file = $educativo->archivo;
            $file = 'files/'.$file;
            $filename = $educativo->nombre;
            $filename = $filename.substr($educativo->archivo, -4);
            header('Content-Disposition: attachment; filename="'.$filename.'"');
            readfile($file);
        }

    }

    public function eliminarAction(){
        $id = $_GET['id'];

        if($id) {
            $educativo = Educativo::get()->where(['id' => $id])->one();
            $educativo->delete();
        }
        View::redirect('/educativo/consulta');

    }


    public function modificarAction()
    {
        $id = $_GET['id'];

        $educativo = new Educativo();
        if ($this->post) {
            $educativo->update($id, $this->post);
            Session::set('message', ['type' => 'success', 'message' => 'Educativo actualizado correctamente']);
            View::redirect('/educativo/consulta');
        }

        $educativo = Educativo::get()->where(['id' => $id])->one();

        if ($educativo) {


            View::render('educativomodificar.php', [
                'educativo' => $educativo

            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El educativos $id no existe"]);
        View::redirect('/app/index');

    }

}