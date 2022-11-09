<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;


class Grupoasignacion extends BaseModel
{

    use BitacoraTrait;

    public $direccion;
    public $hora;
    public $dia;
  //  public $numero_estudiantes;
    public $auxiliar;
    public $descripcion;
    public $fecha_inicio;
    public $fecha_culminacion;

    public $docente_id;

    public function loadRelations(){

        if($this->docente_id){
            $this->docente = Docente::get()->where(['id'=>$this->docente_id])->one();
        }


    }


    public function register(){

    }


    public function corregir(){

    }

}