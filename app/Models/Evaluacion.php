<?php

namespace App\Models;

use App\Tools\BaseModel;
use App\Tools\BitacoraTrait;

class Evaluacion  extends BaseModel
{
    use BitacoraTrait;

      public $estudiante_id;
       public $docente_id;
       public $estado_id;
         public $tema_id;
           public $evaluacion_tipo_id;

    public $estudiante;
    public $docente;
    public $tema;
    public $evaluacion_tipo;

   

    public function register(){

    }



}