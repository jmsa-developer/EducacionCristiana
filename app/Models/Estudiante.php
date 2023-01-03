<?php

namespace App\Models;

use App\Tools\BitacoraTrait;

class Estudiante extends Persona
{
    use BitacoraTrait;

    const CONTRASENA = '123456';

    public $pastor_id;
    public $ministerio_id;
    public $estado_id;
    public $zona_id;



    public function loadRelations(){

        if($this->ministerio_id){
            $this->ministerio = Ministerio::get()->where(['id'=>$this->ministerio_id])->one();
        }

        if($this->zona_id){
            $this->zona = Zona::get()->where(['id'=>$this->zona_id])->one();
        }

        if($this->pastor_id){
            $this->pastor = Pastor::get()->where(['id'=>$this->pastor_id])->one();
        }


    }

    public function register($data)
    {
        $validate = Estudiante::get()->where(['cedula' => $data['cedula']])->one();

        if ($validate) {
            return false;
        }

        $usuario = new Usuario();
        $usuario->usuario = $data['cedula'];
        $usuario->clave = password_hash(self::CONTRASENA, PASSWORD_DEFAULT);
        $usuario->rol_id = 1;
        $usuario->load($data);
        $usuario->save();

        $estudiante = new Estudiante();
        $estudiante->usuario_id = $usuario->id;
        $estudiante->estado_id = 1;
        $estudiante->load($data);
        $estudiante->fecha_nacimiento = date('Y-m-d', strtotime($data['fecha_nacimiento']));
        $estudiante->fecha_inicio = date('Y-m-d', strtotime($data['fecha_inicio']));

        $estudiante->save();

        return true;

    }

    public function update($id, $data){
        $estudiante = Estudiante::get()->where(['id' => $id])->one();
        $estudiante->load($data);
        $estudiante->fecha_inicio = date('Y-m-d', strtotime($estudiante->fecha_inicio));

        $estudiante->save();
    }


}