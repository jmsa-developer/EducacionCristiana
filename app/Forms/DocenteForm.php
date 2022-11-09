<?php

namespace App\Forms;

use App\Models\Docente;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\Usuario;

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
//    public $nombre_m;
   // public $turno;
    public $pastor_id;
    public $ministerio_id;

   // public $lider_ministerio;
   // public $gdc;
  //  public $lider_gdc;

    const CONTRASENA = '123456';

    public function register(){

        $usuario = new Usuario();
        $usuario->usuario = $this->cedula;
        $usuario->clave = password_hash(self::CONTRASENA, PASSWORD_DEFAULT);
        $usuario->load($this->data);
        $usuario->save();

        $docente = new Docente();
        $docente->usuario_id = $usuario->id;
        $docente->load($this->data);
        $docente->fecha_inicio = date('Y-m-d', strtotime($this->fecha_inicio));
        
        $docente->save();

    }


    public function update($id){
        $docente = Docente::get()->where(['id' => $id])->one();
        $docente->load($this->data);
        $docente->fecha_inicio = date('Y-m-d', strtotime($this->fecha_inicio));

        $docente->save();
    }


}
