<?php

namespace App\Models;

use App\BaseModel;

class Usuario extends BaseModel
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $email;
    public $usuario;
    public $clave;
    public $rol;
    public $descripcion;
    public $estado;
    public $borrado;

    public static function getByUsernameAndPassword($username, $password ){


        $user = self::get()->where([
            'usuario' => $username,
        ])->one();


        if(!$user){
            return false;
        }


        if(!password_verify($password, $user->clave)){
            return false;
        }

        return $user;

    }

    public function register(): int
    {
        $this->clave = password_hash($this->clave, PASSWORD_DEFAULT);
        return parent::save();
    }

}