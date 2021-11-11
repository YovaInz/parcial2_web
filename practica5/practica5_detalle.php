<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalle de registro</title>
</head>
<body>
	<?php 

			$registros = array(
			array("id" => 1, "nombre" => "Paul", "edad" => 17, "sexo" => "M"),
			array("id" => 2, "nombre" => "Sherlyn", "edad" => 28, "sexo" => "F"),
			array("id" => 3, "nombre" => "Evelyn", "edad" => 17, "sexo" => "F"),
			array("id" => 4, "nombre" => "Hugo", "edad" => 14, "sexo" => "M"),
			array("id" => 5, "nombre" => "Angel", "edad" => 17, "sexo" => "M"),
			array("id" => 6, "nombre" => "Yovanni", "edad" => 17, "sexo" => "M"),
			array("id" => 7, "nombre" => "José", "edad" => 17, "sexo" => "M"),
		);



		if (isset($_GET["id"])) {
		$id = $_GET["id"]-1;
			echo "<h1>Datos de la persona</h1><hr>";
			echo "ID: " . $_GET["id"] . "<br>";
			echo "Nombre: " . $registros[$id]["nombre"] . "<br>";
			echo "Edad: " . $registros[$id]["edad"] . "<br>";
			echo "Sexo: " . $registros[$id]["sexo"] . "<br>";
		}else{
			echo "<h1>El dato de ID es requerido.</h1>";
		}

	 ?>
</body>
</html>