<?php 
$num1 = 5;
$num2 = 5;

function calcular($num1, $num2){
	return($num1 + $num2);
}

$soma = $num1 + $num2;

printf('A soma de ' . $num1 . ' + ' . $num2 . ' é ' . $soma);

if ($soma >20){
	echo('<br>resultado final: ' . $soma + 8);
}elseif ($soma <=20){
	echo('<br>resultado final: ' . $soma - 5);
}

 ?>