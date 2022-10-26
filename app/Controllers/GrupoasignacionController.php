<?php

namespace App\Controllers;

use App\Forms\GrupoasignacionForm;
use App\Models\Grupoasignacion;
use App\Models\Usuario;
use App\View;

// Controlador principal de la aplicacion
class GrupoasignacionController extends BaseController
{

 

    public function registroAction()
    {
        $grupoasignacion = new GrupoasignacionForm();
        if ($grupoasignacion->load($this->post)) {
            $grupoasignacion->register();

            View::redirect('/app/index');
        }


        View::render('grupoasignacion.php');
    }

 
}