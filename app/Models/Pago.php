<?php

namespace App\Models;

use App\Tools\BaseModel;
use App\Tools\BitacoraTrait;

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


    public function register($data)
    {


        $pago = new Pago();
        $pago->load($data);
        $pago->fecha_pago = date('Y-m-d', strtotime($data['fecha_pago']));

        $pago->save();

        return true;

    }

    public function update($id, $data){
        $pago = Pago::get()->where(['id' => $id])->one();
        $pago->load($data);

        $pago->save();
    }

    public function corregir()
    {

    }

}