<?php

namespace App\Controllers;


use App\Models\Estudiante;
use App\Models\Persona;
use App\Models\Usuario;
use App\Session;


use App\View;

// Controlador principal de la aplicacion
class UserController extends BaseController
{
    public $defaultAction = 'login';

    public function loginAction()
    {
        $error = null;

        if ($this->isPost()) {

            $username = $this->post['username'];
            $password = $this->post['password'];

            $user = Usuario::getByUsernameAndPassword($username, $password);

            if ($user) {
                Session::set('loggedIn', true);
                Session::set('user', $user);
                Session::set('message',['type' => 'success','message'=>'Bienvenido '.$user->nombre]);

                View::redirect('/app/index');
            } else {
                Session::set('message',['type' => 'danger','message'=>'Usuario o contraseña incorrectos']);

            }
        }
        View::render('login.php', [
        ]);
    }

    public function logoutAction(){

        Session::destroy();

        View::redirect('/user/login');
    }

    public function registeruserAction()
    {

        $user = new Usuario();

        if ($user->load($this->post)) {

            $user->register();
            View::redirect('/user/login');
        }

        View::render('register_user.php', ['user' => $user]);

    }

    public function consultauserAction()
    {
        $user = Usuario::get()->all();

        View::render('consulta_user.php',[
            'user'=>$user,
        ]);
    }


}