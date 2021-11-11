<?php 

        $nombre_alumno = $_POST['nombre_alumno'];
        $grupo =  $_POST['grupo'];
        $fecha = $_POST['fecha'];
        $pregunta1 = $_POST['pregunta1'];
        $pregunta2 = $_POST['pregunta2'];
        $pregunta3 = $_POST['pregunta3'];
        $pregunta4 = $_POST['pregunta4'];
        $pregunta5 = $_POST['pregunta5'];
        $pregunta6 = $_POST['pregunta6'];
        $pregunta7 = $_POST['pregunta7'];
        $pregunta8 = $_POST['pregunta8'];
        $pregunta9 = $_POST['pregunta9'];
        $pregunta10 = $_POST['pregunta10'];
        $cont = 0;
        $msj = "";

// ------------------------------------------------
        if($pregunta1 == "a"){
            $pregunta1 = "World While Web";
        }elseif ($pregunta1 == "b") {
            $pregunta1 = "Where We Are Web";
        }elseif ($pregunta1 == "c") {
            $pregunta1 = "World Wide Web";
        }
        if ($pregunta1 == "World Wide Web") {
            $cont++;
        }
// -----------------------------------------------
        if ($pregunta2 == 'a') {
            $pregunta2 = 'get class';
        }elseif ($pregunta2 == 'b') {
            $pregunta2 = 'include';
        }elseif ($pregunta2 == 'c') {
            $pregunta2 = 'import';
        }
        if ($pregunta2 == "import") {
            $cont++;
        }
// -----------------------------------------------
        if ($pregunta3 == 'a') {
            $pregunta3 = 'polimorfismo';
        }elseif ($pregunta3 == 'b') {
            $pregunta3 = 'método';
        }elseif ($pregunta3 == 'c') {
            $pregunta3 = 'clase';
        }
        if ($pregunta3 == "método") {
            $cont++;
        }
// -----------------------------------------------
        if ($pregunta4 == 'php') {
            $pregunta4 = 'PHP';
        }
        if ($pregunta4 == "PHP") {
            $cont++;
        }
// -----------------------------------------------
        if ($pregunta5 == 'html') {
            $pregunta5 = 'HTML';
        }
        if ($pregunta5 == "HTML") {
            $cont++;
        }
// -----------------------------------------------
        if ($pregunta6 == 'ram') {
            $pregunta6 = 'RAM';
        }
        if ($pregunta6 == "RAM") {
            $cont++;
        }
// -----------------------------------------------
        for ($i=0; $i < count($pregunta7); $i++) { 
            if($i==0){
                $respuesta7 = $pregunta7[$i].',';
            }elseif ($i == count($pregunta7)-1) {
                $respuesta7 = $respuesta7.$pregunta7[$i];  
            }else {
                $respuesta7 = $respuesta7 . $pregunta7[$i];
            }
        }if ($respuesta7 == "HTML,CSS") {
            $estado7 = "Correcto";
            $cont++;
        }else{
            $estado7 = "Incorrecto";
        }
// -----------------------------------------------
        for ($i=0; $i < count($pregunta8); $i++) { 
            if($i==0){
                $respuesta8 = $pregunta8[$i].',';
            }elseif ($i == count($pregunta8)-1) {
                $respuesta8 = $respuesta8.$pregunta8[$i];  
            }else {
                $respuesta8 = $respuesta8 . $pregunta8[$i];
            }
        }if ($respuesta8 == "PHP,JAVA") {
            $estado8 = "Correcto";
            $cont++;
        }else{
            $estado8 = "Incorrecto";
        }
// -----------------------------------------------
        for ($i=0; $i < count($pregunta9); $i++) { 
            if($i==0){
                $respuesta9 = $pregunta9[$i].',';
            }elseif ($i == count($pregunta9)-1) {
                $respuesta9 = $respuesta9.$pregunta9[$i];  
            }else {
                $respuesta9 = $respuesta9 . $pregunta9[$i];
            }
        }if ($respuesta9 == "PHP,CPPJAVA") {
            $estado9 = "Correcto";
            $cont++;
        }else{
            $estado9 = "Incorrecto";
        }
// -----------------------------------------------
        if ($pregunta10 == "1998-12-04") {
            $cont++;
        }
// -----------------------------------------------
        if($cont <= "4"){
            $msj = "Pesimo &#128556;";
        }elseif ($cont == "5") {
            $msj = "REPROBADO &#128528;";
        }elseif ($cont == "6"){
            $msj = "Puedes mejorar &#128522;";
        }elseif ($cont == "7") {
            $msj = "Puedes mejorar &#128522;";
        }elseif ($cont == "8") {
            $msj = "Muy Bien &#128522;";
        }elseif ($cont == "9") {
            $msj = "Exelente &#128513;";
        }elseif ($cont == "10") {
            $msj = "FELICIDADES &#128512;";
        }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="shortcut icon" href="lapiz.png">
    <title>Resultados</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
		<span class="navbar-brand mb-12 h1" style="margin:auto">Calificación: <?php echo $cont;?></span>
        <span class="navbar-brand mb-12 h1" style="margin:auto"><?php echo $msj;?></span>

	</nav>
    <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-8 h1" style="margin:auto">Grupo: <?php echo $grupo; ?></span>
    <span class="navbar-brand mb-8 h1" style="margin:auto">Nombre: <?php echo $nombre_alumno; ?></span>
    <span class="navbar-brand mb-8 h1" style="margin:auto">Fecha: <?php echo $fecha; ?></span>
	</nav>
	<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><H6><b>PREGUNTA</H6></b></div>
            <div class="col-sm-3"><H6><b>RESPUESTA</H6></b></div>
            <div class="col-sm-3"><h6><b>ESTADO</h6></b></div>
            <div class="col-sm-3"><h6><b>RESPUESTA CORRECTA</h6></b></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>1.- ¿Qué significa WWW? </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta1; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta1 == "World Wide Web"){ echo "Correcto";}else{ echo "Incorrecto";} ?></h6></div>
            <div class="col-sm-3"><h6>World Wide Web</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>2.- ¿Que instrucción de JAVA necesito incluir otra clase y poderla utilizar en mi programa? </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta2; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta2 == "import"){ echo "Correcto"; }else { echo "Incorrecto";} ?></h6></div>
            <div class="col-sm-3"><h6>import</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>3.- Es lo que invocamos de un objeto, para que se ejecute un bloque de código:</H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta3; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta3 == "método"){ echo "Correcto"; }else { echo "Incorrecto";} ?></h6></div>
            <div class="col-sm-3"><h6>Método</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>4.- Es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web. </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta4; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta4 == "PHP") { echo "Correcto"; }else{ echo "Incorrecto"; } ?></h6></div>
            <div class="col-sm-3"><h6>PHP</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>5.- Son las siglas en inglés de HyperText Markup Language, hace referencia al lenguaje de marcado para la elaboración de páginas web. </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta5; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta5 == "HTML") { echo "Correcto"; }else{ echo "Incorrecto"; } ?></h6></div>
            <div class="col-sm-3"><h6>HTML</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>6.- La memoria... es el dispositivo de una máquina donde se almacenan datos o instrucciones que posteriormente se pueden utilizar. </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta6; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta6 == "RAM") { echo "Correcto"; }else{ echo "Incorrecto"; } ?></h6></div>
            <div class="col-sm-3"><h6>RAM</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>7.- Son lenguajes utilizados para desarrollo web de parte del FrontEnd. </H6></div>
            <div class="col-sm-3"><H6><?php for ($i=0; $i < count($pregunta7); $i++) { echo $pregunta7[$i] .  ','; }?></H6></div>
            <div class="col-sm-3"><h6><?php echo $estado7; ?></h6></div>
            <div class="col-sm-3"><h6>HTML,CSS</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>8.- Son lenguajes utilizados para desarrollo web de parte del BackEnd. </H6></div>
            <div class="col-sm-3"><H6><?php for ($i=0; $i < count($pregunta8) ; $i++) { echo $pregunta8[$i] . ','; } ?></H6></div>
            <div class="col-sm-3"><h6><?php echo $estado8; ?></h6></div>
            <div class="col-sm-3"><h6>PHP,JAVA</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>9.- Son lenguajes orientados a objetos. </H6></div>
            <div class="col-sm-3"><H6><?php for ($i=0; $i < count($pregunta9) ; $i++) { echo $pregunta9[$i] . ','; } ?></H6></div>
            <div class="col-sm-3"><h6><?php echo $estado9; ?></h6></div>
            <div class="col-sm-3"><h6>PHP,CPP,JAVA</h6></div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"><H6>10.- ¿En que fecha fue creada JavaScript? </H6></div>
            <div class="col-sm-3"><H6><?php echo $pregunta10; ?></H6></div>
            <div class="col-sm-3"><h6><?php if($pregunta10 == "1998-12-04"){ echo "Correcto";}else{ echo "Incorrecto";} ?></h6></div>
            <div class="col-sm-3"><h6>1998-12-04</h6></div>
        </div>
    </div>
</body>
</html>