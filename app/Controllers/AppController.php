<?php

namespace App\Controllers;

use App\Forms\EstudianteForm;
use App\Forms\DocenteForm;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Usuario;
use App\Models\educativo;
use App\Models\consultaestudiante;
use App\View;
use App\Models\Estudianteconsulta;

// Controlador principal de la aplicacion
class AppController extends BaseController
{

    public function indexAction()
    {
        View::render('plantilla.php');
    }
    public function consultaestudianteAction()
    {
        if ($this->isPost()) {

            $evaluaciones = new evaluaciones();
            $evaluaciones->name = $this->post['name'];
            $evaluaciones->cedula = $this->post['cedula'];
            $evaluaciones->save();

            View::redirect('/user/login');
        }


        View::render('consultaestudiante.php');
    }
    public function registerAction()
    {
        if ($this->isPost()) {

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
        $estudiante = new EstudianteForm();
        if ($estudiante->load($this->post)) {
            $estudiante->register();

          //  View::redirect('/app/index');
        }


        View::render('estudiante.php');
    }


    public function docenteAction()
    {
        $docente = new DocenteForm();
        if ($docente->load($this->post)) {
            $docente->register();

            View::redirect('/app/index');
        }


        View::render('docente.php');
    }

    public function usuarioAction()
    {
        if ($this->isPost()) {

            $usuario = new Usuario();
            $usuario->nombre = $this->post['nombre'];
            $usuario->apellido = $this->post['apellido'];
            $usuario->cedula = $this->post['cedula'];
            $usuario->email = $this->post['email'];
            $usuario->usuario = $this->post['usuario'];
            $usuario->clave = $this->post['clave'];
            $usuario->rol_id = $this->post['rol_id'];
            $usuario->descripcion = $this->post['descripcion'];
            $usuario->save();

            View::redirect('/user/login');
        }

        View::render('usuario.php');
    }

    public function grupoasignacionAction()
    {
        $grupoasignacion = new GrupoasignacionForm();
        if ($grupoasignacion->load($this->post)) {
            $grupoasignacion->register();

            View::redirect('/app/index');
        }


        View::render('grupoasignacion.php');
    }

    public function evaluacionesAction()
    {
        if ($this->isPost()) {

            $evaluaciones = new evaluaciones();
            $evaluaciones->name = $this->post['name'];
            $evaluaciones->cedula = $this->post['cedula'];
            $evaluaciones->save();

            View::redirect('/user/login');
        }


        View::render('evaluaciones.php');
    }
    public function educativoAction()
    {
        if ($this->isPost()) {

            $evaluaciones = new educativo();
            $evaluaciones->name = $this->post['name'];
            $evaluaciones->cedula = $this->post['cedula'];
            $evaluaciones->save();

            View::redirect('/user/login');
        }


        View::render('educativo.php');
    }
    public function estudiantemodificarAction()
    {
        if ($this->isPost()) {

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
        if ($this->isPost()) {

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
        if ($this->isPost()) {

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
        if ($this->isPost()) {

            $calificaciones = new calificaciones();
            $calificaciones->name = $this->post['name'];
            $calificaciones->cedula = $this->post['cedula'];
            $calificaciones->save();

            View::redirect('/user/login');
        }


        View::render('reporte.php');
    }
}