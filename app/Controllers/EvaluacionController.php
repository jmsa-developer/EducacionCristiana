<?php

namespace App\Controllers;

     use App\Forms\EvaluacionForm;
     use App\Models\Evaluacion;
use App\Models\Tema;
use App\Models\Evaluacion_tipo;
//use App\Models\Estudiante;
use App\Models\Docente;
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
        $evaluacion_tipo = Evaluacion_tipo::get()->all();

      $temaOptions = Util::renderOptions( $tema, 'id', ['nombre']);
         $evaluacion_tipoOptions = Util::renderOptions( $evaluacion_tipo, 'id', ['nombre_e']);
       

        View::render('evaluacion.php',[
        'temaOptions' => $temaOptions,
       'evaluacion_tipoOptions' => $evaluacion_tipoOptions
        
        ]);
        
      
}


 
}