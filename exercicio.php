<?php 

$peso = 60.0;
$altura = 1.60;
$res = $peso/($altura*$altura);

function calcular($altura, $peso){
	return($peso/($altura*$altura));


}


printf("Olá Caio, seu peso: " . $peso . " sua altura: " . $altura . " seu IMC: " . $res);


if ($res < 18.5) {
	echo "Abaixo do peso";

}elseif ($res >= 18.6 && $res <=24.9) {
	echo "<br />Peso ideal";

}elseif ($res >= 25.0 && $res <= 29.9) {
	echo "Levemente acima do peso";

}elseif ($res >= 30.0 && $res <= 34.9) {
	echo "Obesidade grau I";
	
}elseif ($res >= 35.0 && $res <= 39.9) {
	echo "Obesidade grau II (severa)";

}elseif ($res >= 40) {
	echo "Obesidade grau III (mórbida)";
}


 ?>