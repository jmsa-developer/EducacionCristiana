<?php  
namespace App\Controllers;

use App\Models\Bitacora;
use App\Tools\View;

class Bitacoracontroller extends BaseController
	
     
    {
        public function consultaAction()
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