<?php

namespace App\Models;

use App\BaseModel;

class Estudiante extends BaseModel
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $email;
    public $fecha_nacimiento;
    public $fecha_inicio;


    public function save(){

       return $this->insert([
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido,
            'cedula'=>$this->cedula,
            'telefono'=>$this->telefono,
            'email'=>$this->email,
            'fecha_nacimiento'=>$this->fecha_nacimiento,
            'fecha_inicio'=>$this->fecha_inicio,

       ]);
        
    }
}