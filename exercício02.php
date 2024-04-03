<?php 

$nome = "Ângela";
$sexo = "Feminino";
$idade = 24;

function programa($nome, $sexo, $idade){
	return($sexo == "Feminino" && $idade < 25);
}

if ($sexo == "Feminino" && $idade < 25){
			echo("Aceita");
	}else{
		echo("Não aceita");
	}

 ?>