<?php  
namespace App\Controllers;

use App\View;

	class PlantillaController{

		public function indexAction(){
			View::render('/views/plantilla.php');
		}

	}