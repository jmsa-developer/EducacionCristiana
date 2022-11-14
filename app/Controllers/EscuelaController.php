<?php

namespace App\Controllers;

use App\Models\Escuela;

use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class EscuelaController extends BaseController
{

 

    public function registroAction()
    {

        if ($this->post) {
            $escuela = new Escuela();
            if ($escuela->register($this->post)) {
                Session::set('message', ['type' => 'success', 'message' => 'Escuela registrado correctamente']);
    
                View::redirect('/escuela/registro');
            } else {
                Session::set('message', ['type' => 'danger', 'message' => 'Error  del escuela ya existe']);
    
            }
        }

    View::render('escuela.php',[
    ]);
    
}



    public function consultaAction()
    {
        $escuelas = Escuela::get()->all();

        View::render('escuelaconsulta.php',[
            'escuelas'=>$escuelas,
        ]);
    }
 

    public function modificarAction()
    {
        $id = $_GET['id'];

        $escuela = new Escuela();
        if ($this->post) {
            $escuela->update($id, $this->post);
            Session::set('message', ['type' => 'success', 'message' => 'escuela actualizado correctamente']);
            View::redirect('/escuela/consulta');
        }

        $escuela = Escuela::get()->where(['id' => $id])->one();

        if ($escuela) {


            View::render('escuelamodificar.php', [
                'escuela' => $escuela,
            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El escuela $id no existe"]);
        View::redirect('/app/index');

    }

    
}