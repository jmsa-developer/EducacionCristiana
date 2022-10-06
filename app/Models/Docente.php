<?php

namespace App\Models;

use App\BaseModel;

class Docente extends BaseModel
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $email;
    public $fecha_nacimiento;
    public $fecha_inicio;


    public function __construct()
    {
        parent::__construct('docente');
    }



}