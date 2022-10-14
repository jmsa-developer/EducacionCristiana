<?php

namespace App\Models;

use App\BaseModel;

class Estudiante extends BaseModel
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $Direccion;
    public $Zona;
  

    public function __construct()
    {
        parent::__construct('estudiantesconsulta');
    }



    public function save(){

       return $this->select([
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido,
            'cedula'=>$this->cedula,
            'telefono'=>$this->telefono,
            'email'=>$this->Direccion,
            'fecha_nacimiento'=>$this->Zona,
            

       ]);
        
    }
}