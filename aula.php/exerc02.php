<?php

echo "===============".PHP_EOL;
echo "Gerador de Tabuada" .PHP_EOL;
echo "===============" .PHP_EOL;

$numerotabuada = readline("Digite o numero a ser multiplicado na tabuada:");

$con = 0;


do {
    $resultado = $con * $numerotabuada;

     echo "$numerotabuada x $con = $resultado" .PHP_EOL; 

     $con++;


}while ( $con <=10 );






   
