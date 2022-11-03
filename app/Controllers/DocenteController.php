<?php

namespace App\Controllers;

use App\Forms\DocenteForm;
use App\Models\Docente;
use App\Models\Ministerio;
use App\Models\Usuario;
use App\View;

// Controlador principal de la aplicacion
class DocenteController extends BaseController
{

 

    public function registroAction()
    {
        $docente = new DocenteForm();
        if ($docente->load($this->post)) {
            $docente->register();

            View::redirect('/app/index');
        }


        View::render('docente.php');
    }

    public function consultaAction()
    {
        $docentes = Docente::get()->all();

        View::render('docenteconsulta.php',[
            'docentes'=>$docentes,
        ]);
    }

 
}