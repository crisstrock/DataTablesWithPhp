<?php 

	include('conexion.php');

	$query = "SELECT * FROM trabajadores ORDER BY id DESC";
	$resultado = mysqli_query($conexion, $query);

	if (!$resultado) {
		die("Error");
	}else{
		while($data = mysqli_fetch_assoc($resultado)){
			$arreglo["data"][] = array_map("utf8_encode", $data);
		}
		echo json_encode($arreglo);
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>