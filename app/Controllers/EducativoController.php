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
        $educativo = Educativo::get()->all();

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


    public function estudiantemodificarAction()
    {
        $id = $_GET['id'];
        $estudiante = Estudiante::get()->where(['id' => $id])->one();

        if ($estudiante) {

            View::render('estudiantemodificar.php', [
                'estudiante' => $estudiante,

            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El estudiante $id no existe"]);
        View::redirect('/app/index');

    }


}