<?php  
namespace App\Controllers;

use App\Tools\View;

class PlantillaController{

		public function indexAction(){
			View::render('plantilla.php');
		}

	}