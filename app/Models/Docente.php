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
    public $direccion;
    public $fecha_nacimiento;
    public $lider_ministerio;
    public $lider_gdc;
    public $turno;
    public $gdc;
    public $fecha_ingreso;


    public function __construct()
    {
        parent::__construct('docente');
    }



    public function save(){

       return $this->insert([
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido,
            'cedula'=>$this->cedula,
            'telefono'=>$this->telefono,
            'email'=>$this->email,
            'fecha_nacimiento'=>$this->fecha_nacimiento,
            'direccion'=>$this->direccion,
            'lider_ministerio'=>$this->lider_ministerio,
            'lider_gdc'=>$this->lider_gdc,
            'turno'=>$this->turno,
            'gdc'=>$this->gdc,
            'fecha_ingreso'=>$this->fecha_ingreso,


       ]);
        
    }
}