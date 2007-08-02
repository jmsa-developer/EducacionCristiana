<?php  
namespace App\Controllers;

use App\View;
 use App\Models\BitacoraTrait;

	class Bitacoracontroller extends BitacoraTrait
	
     
    {
        public function bitacoraAction()
        {
            $bitacora = Bitacora::get()->all();
        {
            View::render('bitacora.php',[
                'bitacora'=>$bitacora
            ]);
    
                View::redirect('/user/login');
            
    } View::render('bitacora.php');
    
        }
        }