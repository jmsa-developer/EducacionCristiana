<?php

namespace App\Models;

use App\BaseModel;

class Docente extends Persona
{

    
    public $direccion;
    public $pastor_id;
    public $ministerio_id;



    public function loadRelations(){

        if($this->ministerio_id){
            $this->ministerio = Ministerio::get()->where(['id'=>$this->ministerio_id])->one();
        }



        if($this->pastor_id){
            $this->pastor = Pastor::get()->where(['id'=>$this->pastor_id])->one();
        }


    }

    
    public function register(){

    }


    public function corregir(){

    }

}