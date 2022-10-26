<?php

namespace App\Controllers;

use App\Forms\EstudianteForm;
use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Usuario;
use App\View;

// Controlador principal de la aplicacion
class EstudianteController extends BaseController
{

 

    public function registroAction()
    {
        $estudiante = new EstudianteForm();
        if ($estudiante->load($this->post)) {
            $estudiante->register();

            View::redirect('/app/index');
        }


        View::render('estudiante.php');
    }

 
}