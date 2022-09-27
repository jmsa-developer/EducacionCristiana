<?php  

	require_once("../bd/conexion.php");


	function actionIndex(){

		$query = “select * from usuarios”;
	
		$result = mysqli_query($query);
	if ($result){
		echo "<pre>";
		print_r($result);
		echo "</pre>";
	echo "todo ok";
	}
	else {
	 echo "todo mal";
	}

		require_once("vista/" . $pagina . ".php");
	}





if(isset($_SESSION['ac_usuario'])){
	header("Location: ?pagina=inicio");
}else {
	if (is_file("vista/" . $pagina . ".php")) {
		require_once("vista/" . $pagina . ".php");
	} else {
		echo "pagina en construcion";
	}
}
