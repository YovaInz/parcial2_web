<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>practica2. PHP dentro de HTML</title>
</head>
<body>
	<?php 
		$numero = rand(1,4);
		$color = ["#FF0000","#00FF00","#0000FF","#000000"];
		$numcolor = rand(0,3);

		echo "<div style='color:".$color[$numcolor]."'>Color generado = " . $color[$numcolor]. "</div>";
		echo "Numero generado = " . $numero;
		if ($numero == 1) {
	?>		
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h1>

	 <?php } else if ($numero == 2) {?>

	 <h2 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h2>

	<?php } else if ($numero == 3) {?>
		<h3 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h3>
	<?php } else { ?>
		<h4 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h4>
	<?php } ?>
	<h3>Inzunza Aguilar Cesar Yovanni 5AVP</h3>
</body>
</html>