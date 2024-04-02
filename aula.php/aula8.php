<?php

echo "<h1>trabalhando com funçoes</h1>";

function somar($num1, $num2)
{
    return $num1 + $num2;
}

echo somar (2, 4);
echo "<br>";
echo somar (10, 20);

echo "<hr>";
echo"<h2>Verificaçao de numeros par ou impar</h2>";

function is_Par($numero){
    return $numero % 2 == 0;
}

if(is_Par(11)){
    echo"É par";
}else{
    echo "É impar";
}

echo "<hr>";
echo"<h2>Verificaçao de maioridade</h2>";

function is_maior($idade){
    if ($idade >= 18){
        echo "É maior de idade";
    
}else{
        echo "É maior de idade";

    }
}   

is_maior(20);

echo "<hr>";
echo"<h2>Construa uma função, chamada soma_tres(), que retorne
a soma de três números.</h2>";

function soma_tres($num1, $num2, $num3){
    return $num1+ $num2+ $num3;
}

echo "a soma dos tres " . soma_tres (2,5,8);

echo "<hr>";
echo"<h2>Construa uma função, chamada media(), que retorne a média de 4 notas.</h2>";

function media($num1,$num2,$num3,$num4){
    return ($num1+ $num2+ $num3 +$num4) /4;
}

echo "A media é". media (6,7,8,9);

echo "<hr>";
echo"<h2>Construa uma função, chamda media_array(), que retorne a média dos valores do array.</h2>";

//count
$notas = [10,8,9,5.5,8,10];

function media_array ($listaNotas){
    $totalNotas = 0;
    foreach($listaNotas as $notas){

      $totalNotas += $notas;

    }

    return $totalNotas / count($listaNotas);

}

echo media_array ($notas);

echo "<hr>";
echo"<h2>construa uma função, chamada menor_nota, que retorna a menor nota do array.</h2>";

function nota_array($notas) {
    $soma = 0;
    foreach($notas as $nota){
        $soma += $nota;
    }
    $quantidade = count($notas);
    return $soma / $quantidade;
}

$notas = array(10, 5, 6, 10); 
echo "A média das notas é: " . nota_array($notas);

















