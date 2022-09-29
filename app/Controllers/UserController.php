<?php

namespace App\Controllers;

use App\View;

// Controlador principal de la aplicacion
class UserController extends BaseController
{
    public $defaultAction = 'login';

    public function loginAction()
    {
        View::render('login.php');
    }

    public function registerAction()
    {
        View::render('register.php');
    }

}