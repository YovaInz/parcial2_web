<?php 

	$nombre = $_GET['nombre'];
	$edad = $_GET['edad'];
	$correo = $_GET['correo'];
	$fecha_nacimiento = $_GET['fecha_nacimiento'];
	$sexo = $_GET['sexo'];
	$areas = $_GET['areas'];

	echo 'Nombre: ' . $nombre;
	echo '<br><br>';
	echo 'edad: ' . $edad;
	echo '<br><br>';	
	echo 'correo: ' . $correo;
	echo '<br><br>';	
	echo 'fecha de nacimiento: ' . $fecha_nacimiento;
	echo '<br><br>';	
	echo 'sexo: ' . $sexo;
	echo '<br><br>';	
	echo 'Areas de preferencia: <br>';
	for ($i=0; $i < count($areas); $i++) { 
		echo $areas[$i] . '<br>';
	}

 ?>