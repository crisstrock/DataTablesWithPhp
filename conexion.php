<?php 

	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "test";
	$conexion = mysqli_connect($server, $user, $password, $db);
	if (!$conexion) {
		die('Error de conexión: ' . mysql_connect_errno());
	}
?>