<?php

namespace App\Forms;

use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;

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
    public $pastor;
    public $lider_grupo;





    public function register(){

        $pastor = new Pastor();
        $pastor->nombre = $this->pastor;
        $pastor->turno = $this->turno;
        $pastor_id = $pastor->save();

        $ministerio = new Ministerio();
        $ministerio->nombre_m = $this->nombre_m;
        $ministerio_id = $ministerio->save();


        $estudiante = new Estudiante();
        $estudiante->load($this->data);
        $estudiante->pastor_id = $pastor_id;
        $estudiante->ministerio_id = $ministerio_id;
        $estudiante->ubicacion_id = 0;
        $estudiante->estado_id = 0;
        $estudiante->save();

    }

}