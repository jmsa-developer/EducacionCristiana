<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
use App\Session;

class Estudiante extends Persona
{

    public $pastor_id;
    public $ministerio_id;
    public $estado_id;
    public $zona_id;

    public $ministerio;


    public function loadRelations(){

        if($this->ministerio_id){
            $this->ministerio = Ministerio::get()->where(['id'=>$this->ministerio_id])->one();
        }
     




    }

    public function register(){

    }



}