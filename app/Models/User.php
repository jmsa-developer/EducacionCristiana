<?php

namespace App\Models;

use App\BaseModel;

class User extends BaseModel
{
    public function __construct()
    {
        parent::__construct('user');
    }

    public static function getByUsernameAndPassword($username, $password ){

        $password = password_hash($password, PASSWORD_DEFAULT);

        $user = self::getAllByConditions([
            'username' => $username,
            'password' => $password
        ]);


    }

}
