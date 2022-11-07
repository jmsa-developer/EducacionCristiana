<?php

namespace App\Models;

use App\BaseModel;
use App\BitacoraTrait;
use App\Session;

class Evaluacion  extends BaseModel
{
    use BitacoraTrait;

    public $estudinte_id;
    public $docente_id;
    public $estado_id;
    public $tema_id;
    

    public $etudiante;
    public $docente;
    public $tema;


   

    public function register(){

    }



}