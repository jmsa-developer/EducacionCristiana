<?php

namespace App\Controllers;

use App\Models\Grupoasignacion;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Usuario;
use App\Models\educativo;
use App\Models\Zona;
use App\Models\Pastor;
use App\Models\Bitacora;
use App\Session;
use App\View;
//use App\Models\Educativo;
use App\Models\Estudianteeliminar;

// Controlador principal de la aplicacion
class AppController extends BaseController
{

    public function indexAction()
    {
        View::render('plantilla.php');
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

    public function grupoasignacionestAction()
    {
        if ($this->isPost()) {

            $calificaciones = new calificaciones();
            $calificaciones->name = $this->post['name'];
            $calificaciones->cedula = $this->post['cedula'];
            $calificaciones->save();

            View::redirect('/user/login');
        }


        View::render('grupoasignacionest.php');
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
