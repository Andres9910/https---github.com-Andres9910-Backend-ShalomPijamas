<?php 
	$conexion = new mysqli("localhost", "Andres", "9910andres", "tiendashalom");

	if($conexion){
		//echo "Conexion exitosa";
	} else{
		echo "Conexion fallida";
	}
 ?>