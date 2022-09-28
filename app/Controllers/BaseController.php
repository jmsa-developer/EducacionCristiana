<?php

namespace App\Controllers;

use App\View;

class BaseController
{

    public function __construct()
    {
        // Inicializar la sesion
        \App\Session::init();
        // Verificar si el usuario esta logueado
        $logged = \App\Session::get('loggedIn');
        // Si no esta logueado y no esta en el controlador de login
        if (!$logged && get_class($this) != 'App\Controllers\LoginController') {
            // Redireccionar al controlador de login
            header('Location: login');
            exit;
        }

        if ($logged && get_class($this) === 'App\Controllers\LoginController') {
            // Redireccionar a la raiz del proyecto
            header('Location: /' . SITE_NAME);
            exit;
        }

    }


}