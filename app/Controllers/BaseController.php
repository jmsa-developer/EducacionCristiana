<?php

namespace App\Controllers;

use App\Access;
use App\Session;
use App\View;

class BaseController
{
    public $defaultAction = 'index';
    protected $post;
    private $class;
    private $action;
    private $controller;
    public $params;

    public function __construct($controller, $action, $params)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
        $this->class = get_class($this);

        // Si no esta logueado y no esta en el controlador de login
        if (!Access::isLogged() && $this->class != 'App\Controllers\UserController') {
            // Redireccionar al controlador de login
            View::redirect('/user/login');
        }



        // Si no tiene permisos y no esta en el controlador de login
        if (!Access::isAllowed($this->controller, $this->action) && $this->class != 'App\Controllers\UserController') {
            // Redireccionar al controlador de login
            View::redirect('/app/index');
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