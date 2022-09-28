<?php

namespace App\Controllers;

use App\View;

// Controlador principal de la aplicacion
class AppController extends BaseController
{

    public function indexAction()
    {
        View::render('plantilla.php');
    }

}