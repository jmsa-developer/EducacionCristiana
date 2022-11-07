<?php

namespace App\Controllers;

use App\Forms\EvaluacionForm;
use App\Models\Evaluacion;
use App\Models\tema;

use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class EvaluacionController extends BaseController
{

 

    public function registroAction()
    {
        $evaluacion = new EvaluacionForm();
        if ($evaluacion->load($this->post)) {
            $evaluacion->register();
            Session::set('message',['type' => 'success','message'=>'evaluacion registrado correctamente']);

            View::redirect('/app/index');
        }

       $tema = Tema::get()->all();
      

         $temaOptions = Util::renderOptions($tema, 'id', ['nombre']);
       

        View::render('evaluacion.php',[
            'temaOptions' => $temaOptions
        ]);
        
      
}


 
}