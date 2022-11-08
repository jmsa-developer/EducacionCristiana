<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;


class Educativo extends BaseModel

{
    use BitacoraTrait;


    public $nombre;
    public $archivo;
    public $summernote;
    public $escuela_id;
    
    public $borrado;


}
