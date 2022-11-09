<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
use App\Session;

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