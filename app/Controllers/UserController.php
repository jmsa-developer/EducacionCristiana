<?php

namespace App\Controllers;

use App\Models\Estudiante;
use App\View;
use App\Models\Ministerio;
// Controlador principal de la aplicacion
class UserController extends BaseController
{
    public $defaultAction = 'login';

    public function loginAction()
    {
        View::render('login.php');
    }

    public function registerAction()
    {
        if($this->isPost()){

            $estudiante = new Estudiante();
            $estudiante->name = $this->post['name'];
            $estudiante->cedula = $this->post['cedula'];
            $estudiante->save();

            View::redirect('/user/login');
        }


        View::render('register.php');
    }

    public function estudianteAction()
    {
        if($this->isPost()){

            $estudiante = new Estudiante();
            $estudiante->nombre = $this->post['nombre'];
            $estudiante->cedula = $this->post['cedula'];
            $estudiante->apellido = $this->post['apellido'];
            $estudiante->email = $this->post['email'];
            $estudiante->fecha_nacimiento = $this->post['fecha_nacimiento'];
            $estudiante->telefono = $this->post['telefono'];
            $estudiante->fecha_inicio = $this->post['fecha_inicio'];
            $estudiante->save();

            View::redirect('/user/login');
        }
$ministerios=Ministerio::getAll();

        View::render('estudiante.php', ["ministerios"=>$ministerios]);
    }

}