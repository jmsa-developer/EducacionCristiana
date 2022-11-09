<?php

namespace App\Controllers;

use App\Forms\EducativoForm;
use App\Models\Educativo;


use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class EducativoController extends BaseController
{

    

    public function registroAction()
    {
        $educativo = new EducativoForm();
        if ($educativo->load($this->post)) {
            $educativo->register();
            Session::set('message',['type' => 'success','message'=>'tema registrado correctamente']);

            View::redirect('/app/index');
        }

      

        View::render('educativo.php'
        );
    
        
}

public function consultaAction()

{
    $educativo = Educativo::get()->all();
    

    View::render('educativoconsulta.php',[
        'educativo'=>$educativo,
    
    ]);
}

public function estudiantemodificarAction()
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


 
}