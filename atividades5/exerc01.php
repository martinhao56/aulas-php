<?php

/*imprima a tabuada solicitada pelo usuario */

$tabuada = readline("Digite o numero da tabuada: ");

for ($contador = 0; $contador <= 10; $contador++) {
    echo "$tabuada x $contador = ". $tabuada*$contador . PHP_EOL;
}






