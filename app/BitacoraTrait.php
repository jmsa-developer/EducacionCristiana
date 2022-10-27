<?php

namespace App;

use App\Models\Bitacora;

trait BitacoraTrait
{

    public function afterSave($resultado, $accion, $modelo)
    {
        $user = Session::get('user');
        $bitacora = new Bitacora();
        $bitacora->user_id = $user->id;
        $bitacora->resultado = $resultado;
        $bitacora->accion = $accion;
        $bitacora->url = $_GET['route'];
        $bitacora->modelo = $modelo;
        $bitacora->save();
    }

}