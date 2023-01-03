<?php

namespace App\Models;

use App\Tools\BaseModel;

class Bitacora extends BaseModel
{

    public $user_id;
    public $url;
    public $accion;
    public $resultado;
    public $modelo;
    public $hora;
    public $fecha;

}