<?php
	header('Content-type: application/json');
	require 'BASE/BDD.php';
	/*
		Respuesta:
		[
    	  {
        	  "usuario": "admin",
         	  "clave": "admin",
              "rol": "Administrador"
    	  }
		]


	*/

		$usuario = $_GET['usuario'];
		$clave = $_GET['clave'];

	$data = BDD::QUERY("SELECT usuario,clave,descripcion as rol from usuario,rol where rol_id = id_rol and usuario='$usuario' and clave='$clave' ");
	if ($data) {
		echo json_encode($data, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
	}else{
		echo json_encode("error", JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
	}

 ?>