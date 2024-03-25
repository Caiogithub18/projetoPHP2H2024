<?php 

$peso = 60.0;
$altura = 1.60;
$res = $peso/($altura*$altura);

function calcular($altura, $peso){
	return($peso/($altura*$altura));


}


printf("Olá Caio, seu peso: " . $peso . " sua altura: " . $altura . " seu IMC: " . $res);


 ?>