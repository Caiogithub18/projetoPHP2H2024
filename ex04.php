<?php 

$a = 10;
$b = 5;
$c = 2;
$cont = 0;
$t = 0;

 		while($cont < 2){


          if($a > $b){
          echo ($t = $a);
          echo ($a = $b);
          

      }else if( $b > $c){

          
          echo ($b = $c);
          
      }

          $cont++;
      

	}


 ?>