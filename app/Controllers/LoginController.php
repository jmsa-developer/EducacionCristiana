<?php

namespace App\Controllers;

use App\View;

// Controlador principal de la aplicacion
class LoginController extends BaseController
{

    public function indexAction()
    {
        View::render('login.php');
    }

}