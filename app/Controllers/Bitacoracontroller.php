<?php  
namespace App\Controllers;

use App\View;
 use App\Models\Bitacora;
 
	class Bitacoracontroller extends BaseModel
	
    public function bitacoraAction()
    {
        $bitacora = Bitacora::get()->all();
    {
        View::render('bitacora.php',[
            'bitacora'=>$bitacora
        ]);

            View::redirect('/user/login');
        
} 

    }

		
		