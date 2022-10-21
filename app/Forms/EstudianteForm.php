<?php

namespace App\Forms;

use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\zona;
use App\Models\ubicacion;

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
    public $lider_gdc;
    public $lider_ministerio;
    public $gdc;



    public function register(){

        $pastor = new Pastor();
        $pastor->nombre = $this->pastor;
        $pastor->turno = $this->turno;
        $pastor_id = $pastor->save();

        $zona = new zona();
        $zona->nombre = $this->zona;
        $zona_id = $zona->save();

        $ubicacion = new ubicacion();
        $ubicacion->direccion = $this->direccion;
        $ubicacion->zona_id = $zona_id;
        $ubicacion_id = $ubicacion->save();

        $ministerio = new Ministerio();
        $ministerio->nombre_m = $this->nombre_m;
        $ministerio->lider_ministerio = $this->lider_ministerio;
       $ministerio->gdc = $this->gdc;
        $ministerio->lider_gdc = $this->lider_gdc;
        $ministerio_id = $ministerio->save();


        $estudiante = new Estudiante();
        $estudiante->load($this->data);
        $estudiante->pastor_id = $pastor_id;
        $estudiante->ministerio_id = $ministerio_id;
        $estudiante->ubicacion_id = $ubicacion_id;
        $estudiante->estado_id = 0;
        
        $estudiante->save();

    }

}