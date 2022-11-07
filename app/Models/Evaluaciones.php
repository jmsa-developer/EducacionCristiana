<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
use App\Session;

class Eevaluaciones extends BaseModel
{
    use BitacoraTrait;

    public $estudinte_id;
    public $docente_id;
    public $estado_id;
    

    public $etudiante;
    public $docente;
    


    public function loadRelations(){

        if($this->estudiante_id){
            $this->estudiante = Etudiante::get()->where(['id'=>$this->estudiante_id])->one();
        }

        if($this->docente_id){
            $this->docente = docente::get()->where(['id'=>$this->docente_id])->one();
        }




    }

    public function register(){

    }



}