<?php

namespace App\Forms;

use App\Models\Estudiante;
use App\Models\Ministerio;
use App\Models\Pastor;
use App\Models\Zona;
use App\Models\Usuario;

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
    public $zona_nombre;
    public $nombre_m;
    public $turno;
    public $pastor_id;
    
    public $ministerio_id;
    public $zona_id;

    const CONTRASENA = '123456';

           
      
    public function register(){

        $usuario = new Usuario();
        $usuario->usuario = $this->cedula;
        $usuario->clave = password_hash(self::CONTRASENA, PASSWORD_DEFAULT);
        $usuario->load($this->data);
        $usuario->save();

        

        

        $estudiante = new Estudiante(); 
        $estudiante->usuario_id = $usuario->id;
        $estudiante->load($this->data); 
        $estudiante->fecha_inicio = date('Y-m-d');
        
     
    
        $estudiante->estado_id = 0;


        
        $estudiante->save();
 
    }
    public function update($id){
        $estudiante = Estudiante::get()->where(['id' => $id])->one();
        $estudiante->load($this->data);
        $estudiante->fecha_inicio = date('Y-m-d', strtotime($this->fecha_inicio));

        $estudiante->save();
}
}