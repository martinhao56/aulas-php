<?php

echo "===============".PHP_EOL;
echo "Gerador de Senha" .PHP_EOL;
echo "===============" .PHP_EOL;

$ultimasenha = readline ("Digite o numero da ultima senha");

$senha =1;

do{

   echo $senha . PHP_EOL;
   $senha++;
}

while ($senha++ <= $ultimasenha);

   
