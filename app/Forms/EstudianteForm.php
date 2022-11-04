<?php

namespace App\Forms;

use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\zona;


class EstudianteForm extends Model
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $email;
    public $fecha_nacimiento;
    public $fecha_inicio;
    public $direccion;
    public $zona;
    public $nombre_m;
    public $turno;
    public $pastor_id;
    public $lider_gdc;
    public $lider_ministerio;
    public $gdc;
    public $ministerio_id;



    public function register(){


        $zona = new zona();
        $zona->direccion = $this->direccion;
        $zona->zona = $this->zona;

        $zona_id = $zona->save();


        $estudiante = new Estudiante();
        $estudiante->load($this->data);
        $estudiante->fecha_inicio = date('d-m-Y');
        $estudiante->zona_id = $zona_id;
        $estudiante->estado_id = 0;


        
        $estudiante->save();

    }

}