<?php  
namespace App\Controllers;

use App\View;

	class AppController{

		public function indexAction(){
			View::render('plantilla');
		}

	}