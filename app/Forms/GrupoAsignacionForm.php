<?php

namespace App\Forms;

use App\Models\Grupoasignacion;
use App\Models\Docente;


class GrupoasignacionForm extends Model
{
    public $direccion;
    public $hora;
    public $dia;
  //  public $numero_estudiantes;
    public $auxiliar;
    public $descripcion;
    public $fecha_inicio;
    public $fecha_culminacion;

    public $docente_id;
    //public $zona;






    public function register(){


        $grupoasignacion = new Grupoasignacion();
        $grupoasignacion->load($this->data);
        
        $grupoasignacion->save();

    }

}