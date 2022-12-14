<?php

namespace App\Controllers;

use App\Forms\EstudianteForm;
use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Tools\Session;
use App\Tools\Util;
use App\Tools\View;

// Controlador principal de la aplicacion
class CalificacionController extends BaseController
{

 

    public function registroAction()
    {
        $estudiante = new EstudianteForm();
        if ($estudiante->load($this->post)) {
            $estudiante->register();
            Session::set('message',['type' => 'success','message'=>'Estudiante registrado correctamente']);

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