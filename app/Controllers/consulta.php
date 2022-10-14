<?php

namespace App\Controllers;
use App\Models\Estudianteconsulta;
use public\dist\js\consulta.js;

// Controlador principal de la aplicacion
class AppController extends BaseController
{

    public function estudianteconsultaAction()
    { if($this->isPost()){

        $estudiante = new Estudiante();
        $estudiante->nombre = $this->post['nombre'];
        $estudiante->cedula = $this->post['cedula'];
        $estudiante->apellido = $this->post['apellido'];
        $estudiante->email = $this->post['email'];
        $estudiante->fecha_nacimiento = $this->post['fecha_nacimiento'];
        $estudiante->telefono = $this->post['telefono'];
        $estudiante->fecha_inicio = $this->post['fecha_inicio'];
        $estudiante->save();
        View::render('estudianteconsulta.php');
    }

}
}