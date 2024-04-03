<?php 

$num1 = 10;
$num2 = 5;
$num3 = 2;

function decrescente($num1, $num2, $num3){
	return($num1 > $num2 && $num2 > $num3);
}

if ($num1 > $num2 && $num2 > $num3) {
	echo("10 <br> 5 <br> 2");
}else{
	echo("cálculo errado");
}

 ?>