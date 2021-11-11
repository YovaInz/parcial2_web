<?php 
	echo "mi primer programa en PHP";
	echo "<br></br>";
	echo "<h1 align='center'style='color:purple;'>LISTA DE NUMEROS</h1>";

	for ($j=0; $j < 10 ; $j++) { 
		if ($j % 2 == 0) {
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:black; color:white;'>";
		}else{
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:white;'>";
		}
		
		echo $j+1;
		echo "</div>";
	}
	echo "<h3>Inzunza Aguilar Cesar Yovanni 5AVP</h3>";
 ?>