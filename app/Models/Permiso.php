<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
class Permiso extends BaseModel
{
    use BitacoraTrait;
    
    public $nombre;
    public $descripcion;
    public $url;


}