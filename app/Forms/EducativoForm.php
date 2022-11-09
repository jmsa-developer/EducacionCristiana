<?php

namespace App\Forms;

use App\Models\Educativo;
use App\Models\EScuela;


class EducativoForm extends Model
{

    public $nombre;
    public $decripcion;
    public $archivo;
    



    public function register(){


        $educativo = new Educativo();
       
        $educativo->load($this->data);
      //  $educativo->fecha_inicio = date('d-m-Y');



        $educativo->save();

    }

}