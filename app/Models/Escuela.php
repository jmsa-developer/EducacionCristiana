<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
class Escuela extends BaseModel
{
    use BitacoraTrait;


    public $nombre;
    public $turno;
    public $borrado;




}
