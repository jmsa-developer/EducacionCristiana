<?php

namespace App\Models;

use App\BaseModel;

class User extends BaseModel
{

    public $nombre;
    public $apellido;
    public $cedula;
    public $email;
    public $usuario;
    public $clave;
    public $rol;
    public $descripcion;

    public function __construct()
    {

        parent::__construct('user');
    }

    public function save(){

        return $this->insert([
             'nombre'=>$this->nombre,
             'apellido'=>$this->apellido,
             'cedula'=>$this->cedula,
             'email'=>$this->email,
             'usuario'=>$this->usuario,
             'clave'=>$this->clave,
             'rol'=>$this->rol,
             'descripcion'=>$this->descripcion,
 
 
        ]);
         
     }

    public static function getByUsernameAndPassword($username, $password ){

        $password = password_hash($password, PASSWORD_DEFAULT);

        $user = self::getAllByConditions([
            'username' => $username,
            'password' => $password
        ]);


    }

}
