<?php

namespace App\Forms;

use App\Models\Pago;
use App\Models\Tipo;


class PagoForm extends Model
{
    public $fecha_pago;
    public $numero_referencia;
    public $pago_total;
    public $descripcion;

    public $tipo_id;



    public function register(){




        $pago = new Pago();
        $pago->load($this->data);
        
        $pago->save();

    }


}