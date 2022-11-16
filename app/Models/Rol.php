<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
class Rol extends BaseModel
{
    public $nombre;
    public $descripcion;
    public $url_base;

    public function getPermisos(){
        return Permiso::get()->where([
            'rol' => $this->id
        ])->all();
    }

    public function getUsuarios(){
        return Usuario::get()->where([
            'rol' => $this->id
        ])->all();
    }

}