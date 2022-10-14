<?php

namespace App\Controllers;

use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Usuario;
use App\View;
use App\models\reporte;
use App\Models\evaluaciones;
use App\Models\calificacion;
use App\Models\Estudianteconsulta;
use App\Models\Estudiantemodificar;
// Controlador principal de la aplicacion
class AppController extends BaseController
{

    public function indexAction()
    {
        View::render('plantilla.php');
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

            $estudiante = new estudiante();
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
      

        View::render('estudiante.php');
    }


    public function docenteAction()
    {
        if($this->isPost()){

            $docente = new Docente();
            $docente->nombre = $this->post['nombre'];
            $docente->apellido = $this->post['apellido'];
            $docente->cedula = $this->post['cedula'];
            $docente->telefono = $this->post['telefono'];
            $docente->email = $this->post['email'];
            $docente->direccion = $this->post['direccion'];
            $docente->fecha_nacimiento = $this->post['fecha_nacimiento'];
            $docente->nombre_m = $this->post['nombre_m'];
            $docente->lider_ministerio = $this->post['lider_ministerio'];
            $docente->lider_gdc = $this->post['lider_gdc'];
            $docente->turno = $this->post['turno'];
            $docente->gdc = $this->post['gdc'];
//            $docente->fecha_ingreso = $this->post['fecha_ingreso'];

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

    public function grupoasignacionAction()
    {
        if($this->isPost()){

            $grupoasignacion = new grupoasignacion();
            $grupoasignacion->name = $this->post['name'];
            $grupoasignacion->cedula = $this->post['cedula'];
            $grupoasignacion->save();

            View::redirect('/user/login');
        }


        View::render('grupoasignacion.php');
    }

    public function evaluacionesAction()
    {
        if($this->isPost()){

            $evaluaciones = new evaluaciones();
            $evaluaciones->name = $this->post['name'];
            $evaluaciones->cedula = $this->post['cedula'];
            $evaluaciones->save();

            View::redirect('/user/login');
        }


        View::render('evaluaciones.php');
    }

    public function estudiantemodificarAction()
    {
        if($this->isPost()){

            $estudiante = new Estudiantemodificar();
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


        View::render('estudiantemodificar.php');
    }
    public function estudianteconsultaAction()
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


        View::render('estudianteconsulta.php');
    }

    public function calificacionesAction()
    {
        if($this->isPost()){

            $calificaciones = new calificaciones();
            $calificaciones->name = $this->post['name'];
            $calificaciones->cedula = $this->post['cedula'];
            $calificaciones->save();

            View::redirect('/user/login');
        }


        View::render('calificaciones.php');
    }
    public function reporteAction()
    {
        if($this->isPost()){

            $calificaciones = new calificaciones();
            $calificaciones->name = $this->post['name'];
            $calificaciones->cedula = $this->post['cedula'];
            $calificaciones->save();

            View::redirect('/user/login');
        }


        View::render('reporte.php');
    }
}