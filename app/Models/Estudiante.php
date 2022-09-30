<?php

namespace App\Models;

use App\BaseModel;

class Estudiante extends BaseModel
{

    public $name;
    public $cedula;


    public function __construct()
    {
        parent::__construct('estudiante');
    }



    public function save(){

       return $this->insert([
            'nombre'=>$this->name,
            'cedula'=>$this->cedula
        ]);

    }

}
