<?php

namespace App\Controllers;

use App\Forms\EstudianteForm;
use App\Models\Evaluaciones;


use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class EvaluacionesController extends BaseController
{

 

    public function registroAction()
    {
        $evaluaciones = new EvaluacionesForm();
        if ($evaluaciones->load($this->post)) {
            $evaluaciones->register();
            Session::set('message',['type' => 'success','message'=>'evaluacion registrado correctamente']);

            View::redirect('/app/index');
        }

        $evaluaciones = Evaluaciones::get()->all();
      

          $evaluaconesOptions = Util::renderOptions($evaluaciones, 'id', ['tema']);
       

        View::render('evaluacion.php',[
            'evaluacionesOptions' => $evaluacionesOptions,
           
        ]);
    
        
      
}

public function consultaAction()
{
    $estudiantes = Estudiante::get()->all();
    //$zona = Zona::get()->all();

    View::render('estudianteconsulta.php',[
        'estudiantes'=>$estudiantes,
      //  'zona'=>$zona
    ]);
}

public function modificarAction()
{
    $id = $_GET['id'];
    $estudiante = Estudiante::get()->where(['id'=>$id])->one();

    if($estudiante){

        View::render('estudiantemodificar.php',[
            'estudiante'=>$estudiante,

        ]);
    }

    Session::set('message',['type' => 'danger','message'=>"El estudiante $id no existe"]);
    View::redirect('/app/index');

}

public function eliminarAction  ()
{
    $id = $_GET['id'];
    $estudiante = Estudiante::get()->where(['id'=>$id])->one();

    if($estudiante){

        View::render('estudiantemodificar.php',[
            'estudiante'=>$estudiante,

        
        ]);
    }

    View::redirect('/app/index');

}
 
}