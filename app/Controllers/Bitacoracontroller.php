<?php  
namespace App\Controllers;

use App\View;
 use App\Models\Bitacora;

	class Bitacoracontroller extends BitacoraTrait
	
     
    {
        public function bitacoraAction()
     {   
        $bitacora = Bitacora::get()->all();
    
        View::render('bitacora.php',[
            'bitacora'=>$bitacora
        ]);

        
 View::render('bitacora.php');

    }

	}	
		