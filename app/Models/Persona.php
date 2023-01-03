<?php

namespace App\Models;

use App\Tools\BaseModel;
use App\Tools\BitacoraTrait;

class Persona extends BaseModel
{
    use BitacoraTrait;
    
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $email;
    public $fecha_nacimiento;
    public $fecha_inicio;
    public $direccion;
    public $borrado;




}