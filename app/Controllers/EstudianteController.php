<?php

namespace App\Controllers;

use App\Forms\EstudianteForm;
use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\Usuario;
use App\Util;
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

        $pastores = Pastor::get()->all();
        $ministerios = Ministerio::get()->all();

        $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre','turno']);
        $ministeriosOptions = Util::renderOptions($ministerios, 'id', 'nombre_m');

        View::render('estudiante.php',[
            'pastoresOptions' => $pastoresOptions,
            'ministeriosOptions'=>$ministeriosOptions
        ]);
    }

 
}