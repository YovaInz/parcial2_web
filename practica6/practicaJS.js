console.log("Se cargó el archivo de JavaScript"); /*imprime en la consola*/
// alert("Se cargó correctamente el script"); crea una alerta 

var	contador = 0;

function sumaContador() {
	
	contador++;
	console.log(contador);
	document.getElementById('contador').innerHTML = contador; /*el innerHTML es para incluir texto*/

}
function sexoAparece() {
	
	document.getElementById('otro').hidden = false;

}
function sexoDesaparece() {
	
	document.getElementById('otro').hidden = true;

}