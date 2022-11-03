<?php  
namespace App\Controllers;

use App\View;
 use App\Models\Bitacora;
	class Bitacoracontroller extends BaseModel
	
		
		
		public function BitacoraAction()
	
    {
        if ($this->isPost()) {

            $calificaciones = new calificaciones();
            $calificaciones->name = $this->post['name'];
            $calificaciones->cedula = $this->post['cedula'];
            $calificaciones->save();

            View::redirect('/user/login');
        }


        View::render('bitacora.php');

    }