<?php

namespace App\Controllers;

use App\View;

class BaseController
{
    public $defaultAction = 'index';
    protected $post;

    public function __construct()
    {
        // Verificar si el usuario esta logueado
        $logged = \App\Session::get('loggedIn');
        // Si no esta logueado y no esta en el controlador de login
        if (!$logged && get_class($this) != 'App\Controllers\UserController') {
            // Redireccionar al controlador de login
            header('Location: user');
            exit;
        }

        if ($logged && get_class($this) === 'App\Controllers\UserController') {
            // Redireccionar a la raiz del proyecto
            header('Location: /' . SITE_NAME);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->post = $_POST;
        }
    }

    protected function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

}