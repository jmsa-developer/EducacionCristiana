<?php

namespace App\Controllers;

use App\Forms\GrupoAsignacionForm;
use App\Models\Grupoasignacion;
use App\Models\Docente;

use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class GrupoasignacionController extends BaseController
{

 

    public function registroAction()
    {
        $grupoasignacion = new GrupoasignacionForm();
        if ($grupoasignacion->load($this->post)) {
            $grupoasignacion->register();
            Session::set('message',['type' => 'success','message'=>'Grupo registrado correctamente']);

            View::redirect('/app/index');
        }


    $docentes = Docente::get()->all();

    $docentesOptions = Util::renderOptions($docentes, 'id', ['nombre','apellido']);
 //   $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m','lider_ministerio']);
   // $ministeriosOptions = Util::renderOptions($ministerios, 'id', 'nombre_m');

    View::render('grupoasignacion.php',[
        'docentesOptions' => $docentesOptions,
       // 'ministeriosOptions'=>$ministeriosOptions
    ]);

    
}

 
}