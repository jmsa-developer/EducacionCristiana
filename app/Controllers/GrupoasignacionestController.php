<?php

namespace App\Controllers;

use App\Forms\GrupoasignacionestForm;
use App\Models\Grupoasignacionest;
use App\Tools\View;

// Controlador principal de la aplicacion

class GrupoasignacionestController extends BaseController
{

 

    public function registroAction()
    {
        $grupoasignacionest = new GrupoasignacionestForm();
        if ($grupoasignacionest->load($this->post)) {
            $grupoasignacionest->register();

            View::redirect('/app/index');
        }


        View::render('grupoasignacionest.php');
    }

 
}