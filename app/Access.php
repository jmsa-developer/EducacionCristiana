<?php

namespace App;

use App\Models\Permiso;
use App\Models\Rol_Permiso;
use App\Models\Usuario;

class Access
{
    public static function isLogged(): bool
    {
        return Session::get('user') !== null;
    }

    public static function isAllowed(string $controller, string $action): bool
    {
        $route = $controller . '/' . $action;
        $user = Session::get('user');
        $user = Usuario::get()->where(['id'=> $user->id])->one();

        if(!$user){
            return false;
        }
        return true;

        if ($user->getRol()->nombre === 'admin') {
            return true;
        }

        $permisos = self::getPermisos($user->getRol()->id);


        if (!isset($permisos[$route])) {
            Session::set('message',['type' => 'danger','message'=>'No tiene permisos para acceder a esta ruta']);
            return false;
        }

        return true;
    }

    public static function getPermisos($rol_id){
        $permisos = [];

        $rol_permisos = Rol_Permiso::get()->where(['rol_id'=>$rol_id])->all();

        foreach ($rol_permisos as $rol_permiso){
            $permiso = Permiso::get()->where(['id'=>$rol_permiso['permiso_id']])->one();
            $permisos[$permiso->nombre] = $permiso->url;
        }

        return $permisos;
    }


}