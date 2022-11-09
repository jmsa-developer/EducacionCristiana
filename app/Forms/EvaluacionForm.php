<?php

namespace App\Forms;

//use App\Models\Estudiante;
use App\Models\Tema;
use App\Models\Docente;
use App\Models\Evaluacion;
use App\Models\Evaluacion_tipo;

class EvaluacionForm extends Model
{

    public $tiempo;
    public $fecha_inicio;
    public $nombre;
    public $descripcion;
    public $valor;
    public $fecha_cierre;
    public $nombre_e;
    public $tema_id;
    public $evaluacion_tipo_id;



    public function register(){


       

    }

}