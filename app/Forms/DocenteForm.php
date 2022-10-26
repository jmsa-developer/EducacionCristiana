<?php

namespace App\Forms;

use App\Models\Docente;
use App\Models\Ministerio;
use App\Models\Pastor;

class DocenteForm extends Model
{
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $email;
    public $fecha_nacimiento;
    public $fecha_inicio;
    public $direccion;
    public $nombre_m;
    public $turno;
    public $pastor;
    public $lider_ministerio;
    public $gdc;
    public $lider_gdc;





    public function register(){

        $pastor = new Pastor();
        $pastor->nombre = $this->pastor;
        $pastor->turno = $this->turno;
        $pastor_id = $pastor->save();

        $ministerio = new Ministerio();
        $ministerio->nombre_m = $this->nombre_m;
        $ministerio->lider_ministerio = $this->lider_ministerio;
        $ministerio->gdc = $this->gdc;
        $ministerio->lider_gdc = $this->lider_gdc;
        $ministerio_id = $ministerio->save();


        $docente = new Docente();
        $docente->load($this->data);
        $docente->pastor_id = $pastor_id;
        $docente->ministerio_id = $ministerio_id;
        $docente->save();

    }

}