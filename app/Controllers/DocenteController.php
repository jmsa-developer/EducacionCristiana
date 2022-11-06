<?php

namespace App\Controllers;

use App\Forms\DocenteForm;
use App\Models\Docente;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\Usuario;
use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class DocenteController extends BaseController
{

 

    public function registroAction()
    {
        $docente = new DocenteForm();
        if ($docente->load($this->post)) {
            $docente->register();
            Session::set('message',['type' => 'success','message'=>'Docente registrado correctamente']);

            View::redirect('/app/index');
        }


    $pastores = Pastor::get()->all();
    $ministerios = Ministerio::get()->all();

    $pastoresOptions = Util::renderOptions($pastores, 'id', ['nombre','turno']);
    $ministeriosOptions = Util::renderOptions($ministerios, 'id', ['nombre_m','lider_ministerio']);
   // $ministeriosOptions = Util::renderOptions($ministerios, 'id', 'nombre_m');

    View::render('docente.php',[
        'pastoresOptions' => $pastoresOptions,
        'ministeriosOptions'=>$ministeriosOptions
    ]);

    
}


    public function consultaAction()
    {
        $docentes = Docente::get()->all();

        View::render('docenteconsulta.php',[
            'docentes'=>$docentes,
        ]);
    }

 
}