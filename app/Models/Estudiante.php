<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
use App\Session;

class Estudiante extends Persona
{
    use BitacoraTrait;

    public $pastor_id;
    public $ministerio_id;
    public $estado_id;
    public $zona_id;

    public $ministerio;
    public $zona;
    public $pastor;


    public function loadRelations(){

        if($this->ministerio_id){
            $this->ministerio = Ministerio::get()->where(['id'=>$this->ministerio_id])->one();
        }

        if($this->zona_id){
            $this->zona = Zona::get()->where(['id'=>$this->zona_id])->one();
        }

        if($this->pastor_id){
            $this->pastor = Pastor::get()->where(['id'=>$this->pastor_id])->one();
        }


    }

    public function register(){

    }



}