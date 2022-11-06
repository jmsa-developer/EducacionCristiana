<?php

namespace App\Forms;

use App\Models\Edutativo;



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