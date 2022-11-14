<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;

class Escuela extends BaseModel
{
    use BitacoraTrait;


    public $nombre;
    public $tema;
    public $descripcion;
    public $borrado;


    public function register($data)
    {

        $validate = Escuela::get()->where(['nombre' => $data['nombre']])->one();

        if ($validate) {
            return false;
        }

        $escuela = new Escuela();
        $escuela->load($data);

        $escuela->save();

        return true;

    }

    public function update($id, $data){
        $escuela = Escuela::get()->where(['id' => $id])->one();
        $escuela->load($data);

        $escuela->save();
    }


}
