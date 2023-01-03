<?php

namespace App\Models;

use App\Tools\BitacoraTrait;

class Docente extends Persona
{

    use BitacoraTrait;

    const CONTRASENA = '123456';

    public $direccion;
    public $pastor_id;
    public $ministerio_id;

    public function loadRelations()
    {

        if ($this->ministerio_id) {
            $this->ministerio = Ministerio::get()->where(['id' => $this->ministerio_id])->one();
        }


        if ($this->pastor_id) {
            $this->pastor = Pastor::get()->where(['id' => $this->pastor_id])->one();
        }


    }

    public function register($data)
    {
        $validate = Docente::get()->where(['cedula' => $data['cedula']])->one();

        if ($validate) {
            return false;
        }

        $usuario = new Usuario();
        $usuario->usuario = $data['cedula'];
        $usuario->clave = password_hash(self::CONTRASENA, PASSWORD_DEFAULT);
        $usuario->rol_id = 1;
        $usuario->load($data);
        $usuario->save();

        $docente = new Docente();
        $docente->usuario_id = $usuario->id;
        $docente->load($data);
        $docente->fecha_nacimiento = date('Y-m-d', strtotime($data['fecha_nacimiento']));
        $docente->fecha_inicio = date('Y-m-d', strtotime($data['fecha_inicio']));

        $docente->save();

        return true;

    }

    public function update($id, $data){
        $docente = Docente::get()->where(['id' => $id])->one();
        $docente->load($data);
        $docente->fecha_inicio = date('Y-m-d', strtotime($docente->fecha_inicio));

        $docente->save();
    }

    public function corregir()
    {

    }

}