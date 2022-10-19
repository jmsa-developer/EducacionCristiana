<?php

namespace App\Controllers;

use App\Session;
use App\View;

class BaseController
{
    public $defaultAction = 'index';
    protected $post;

    public function __construct()
    {
        // Verificar si el usuario esta logueado
        $logged = Session::get('user');

        // Si no esta logueado y no esta en el controlador de login
        if (!$logged && get_class($this) != 'App\Controllers\UserController') {
            // Redireccionar al controlador de login
            View::redirect('/user/login');
        }

        if ($this->isPost()) {
            $this->post = $_POST;
        }
    }

    protected function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

}