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


    public function docenteAction()
    {
        if($this->isPost()){

            $docente = new docente();
            $docente->nombre = $this->post['nombre'];
            $docente->apellido = $this->post['apellido'];
            $docente->cedula = $this->post['cedula'];
            $docente->telefono = $this->post['telefono'];
            $docente->email = $this->post['email'];
            $docente->direccion = $this->post['direccion'];
            $docente->fecha_nacimiento = $this->post['fecha_nacimiento'];
            $docente->lider_ministerio = $this->post['lider_ministerio'];
            $docente->lider_gdc = $this->post['lider_gdc'];
            $docente->turno = $this->post['turno'];
            $docente->gdc = $this->post['gdc'];
            $docente->fecha_ingreso = $this->post['fecha_ingreso'];

            $docente->save();

            View::redirect('/user/login');
        }

        View::render('docente.php');
    }

    public function usuarioAction()
    {
        if($this->isPost()){

            $usuario = new Usuario();
            $usuario->nombre = $this->post['nombre'];
            $usuario->apellido = $this->post['apellido'];
            $usuario->cedula = $this->post['cedula'];
            $usuario->email = $this->post['email'];
            $usuario->usuario = $this->post['usuario'];
            $usuario->clave = $this->post['clave'];
            $usuario->rol = $this->post['rol'];
            $usuario->descripcion = $this->post['descripcion'];
            $usuario->save();

            View::redirect('/user/login');
        }

        View::render('usuario.php');
    }

}