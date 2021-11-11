<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica #5. Intercambio de variable PHP</title>
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
	 ?>
	<h1>Tabla de registros</h1>
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros) ; $i++) { 
					echo "<tr>";
						echo "<td>" . $registros[$i]["id"]. "</td>";
						echo "<td>" . $registros[$i]["nombre"]. "</td>";
						echo "<td>" . $registros[$i]["edad"]. "</td>";
						echo "<td>" . $registros[$i]["sexo"]. "</td>";
						echo "<td><a href='practica5_detalle.php?id=" . $registros[$i]["id"] ."'>Ver detalles</a></td>";
					echo "</tr>";
				}

			 ?>
		</tbody>
	</table>
	<h3>Inzunza Aguilar Cesar Yovanni 5AVP</h3>
</body>
</html>