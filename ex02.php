<?php 

$num = 30;

function calcular($num){
	return($num % 10 ==0 && $num % 5 ==0 && $num % 2 ==0);

}

$result = ($num % 10 ==0 && $num % 5 ==0 && $num % 2 ==0);

if ($num % 10 ==0 ) {
	echo("é divisivel por 10");
}else {
	echo("não divisivel");
}

if ($num % 5 ==0) {
	echo("<br>é divisivel por 5");
}else {
	echo("não divisivel");
}

if ($num % 2 ==0 ) {
	echo("<br>é divisivel por 2");
}else {
	echo("não divisivel");
}





