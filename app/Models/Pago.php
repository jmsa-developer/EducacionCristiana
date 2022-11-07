<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;

class Pago extends BaseModel
{

    use BitacoraTrait;

    public $fecha_pago;
    public $numero_referencia;
    public $pago_total;
    public $descripcion;

    public $tipo_id;



    public function loadRelations(){

        if($this->tipo_id){
            $this->tipo = Tipo::get()->where(['id'=>$this->tipo_id])->one();
        }


    }



    public function register(){

    }


    public function corregir(){

    }

}