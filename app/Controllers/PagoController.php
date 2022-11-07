<?php

namespace App\Controllers;

use App\Forms\PagoForm;
use App\Models\Pago;
use App\Models\Tipo;

use App\Session;
use App\Util;
use App\View;

// Controlador principal de la aplicacion
class PagoController extends BaseController
{

 

    public function registroAction()
    {
        $pago = new PagoForm();
        if ($pago->load($this->post)) {
            $pago->register();
            Session::set('message',['type' => 'success','message'=>'Pago registrado correctamente']);

            View::redirect('/app/index');
        }


    $tipos = Tipo::get()->all();

   $tiposOptions = Util::renderOptions($tipos, 'id', 'tipo_nombre');

    View::render('pago.php',[
        'tiposOptions'=>$tiposOptions
    ]);

    
}



 
    
}