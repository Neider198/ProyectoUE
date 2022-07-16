<?php 
	header('content-type:text/html;chasrset=UTF-8');
	date_default_timezone_set('America/Bogota');
	setlocale(LC_ALL, "es_Co.utf8");

	$conexion = new mysqli("127.0.0.1" , "root" , "" , "class_sport");

	// $conexion->set_charset("utf8");

	mysqli_set_charset($conexion,'utf8')
 ?>