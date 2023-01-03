<?php

namespace App\Models;

use App\Tools\BaseModel;
use App\Tools\BitacoraTrait;


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
    public $zona_id;


    public function loadRelations(){

        if($this->docente_id){
            $this->docente = Docente::get()->where(['id'=>$this->docente_id])->one();
        }

        if($this->zona_id){
            $this->zona = Zona::get()->where(['id'=>$this->zona_id])->one();
        }

    }

    public function register($data)
    {

        $grupoasignacion = new Grupoasignacion();
        $grupoasignacion->load($data);
        $grupoasignacion->fecha_inicio = date('Y-m-d', strtotime($data['fecha_inicio']));
        $grupoasignacion->fecha_culminacion = date('Y-m-d', strtotime($data['fecha_culminacion']));

        $grupoasignacion->save();

        return true;

    }

    public function update($id, $data){
        $grupoasignacion = Grupoasignacion::get()->where(['id' => $id])->one();
        $grupoasignacion->load($data);
        $grupoasignacion->fecha_inicio = date('Y-m-d', strtotime($grupoasignacion->fecha_inicio));
        $grupoasignacion->fecha_inicio = date('Y-m-d', strtotime($grupoasignacion->fecha_culminacion));


        $grupoasignacion->save();
    }

    public function corregir(){

    }

}