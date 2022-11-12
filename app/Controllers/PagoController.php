<?php

namespace App\Controllers;

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

        if ($this->post) {
            $pago = new Pago();
            if ($pago->register($this->post)) {
                Session::set('message', ['type' => 'success', 'message' => 'Pago registrado correctamente']);
    
                View::redirect('/app/index');
            } else {
                Session::set('message', ['type' => 'danger', 'message' => 'Error  del pago ya existe']);
    
            }
        }


    $tipos = Tipo::get()->all();

   $tiposOptions = Util::renderOptions($tipos, 'id', 'tipo_nombre');

    View::render('pago.php',[
        'tiposOptions'=>$tiposOptions
    ]);
    
}



    public function consultaAction()
    {
        $pagos = Pago::get()->all();

        View::render('pagoconsulta.php',[
            'pagos'=>$pagos,
        ]);
    }
 

    public function modificarAction()
    {
        $id = $_GET['id'];

        $pago = new Pago();
        if ($this->post) {
            $pago->update($id, $this->post);
            Session::set('message', ['type' => 'success', 'message' => 'pago actualizado correctamente']);
            View::redirect('/app/index');
        }

        $pago = Pago::get()->where(['id' => $id])->one();

        if ($pago) {

            $tipos = Tipo::get()->all();
            $tiposOptions = Util::renderOptions($tipos, 'id', ['tipo_nombre'], $pago->tipo->id);

            View::render('pagomodificar.php', [
                'pago' => $pago,
                'tiposOptions' => $tiposOptions
            ]);
        }

        Session::set('message', ['type' => 'danger', 'message' => "El pago $id no existe"]);
        View::redirect('/app/index');

    }

    
}