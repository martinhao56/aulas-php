<?php
//aprendendo array no php

echo "<h1>utilizando array</h1>";
//array unidimensional
$listacompras = ['arroz', 'feijão', 'banana', 'maçã'];

print_r($listacompras); //para saber qual posição
echo '<hr>';

var_dump(($listacompras));

echo '<pre>';
print_r($listacompras);
echo '<pre<';

echo '<br>';

echo '<hr>';
echo $listacompras[2];

## array associativo
echo '<h2>array associativo</h2>';

$listacompras = [
    12 => 'arroz',
    26 => 'feijão',
    22 => 'banana',
    36 => 'maçã',
];

var_dump($listacompras);

echo '<br>';

echo $listacompras[26];

##array multidimensional
echo '<h2>array multidimensional</h2>';

echo '<br>';

$listacompras = [
    'alimentos' => [
        'arroz',
        'feijao'
    ],
    'frutas' => [
        'abacaxi',
        'banana',
        'tomate'
    ],
    'massas' => [
        'macarrão',
        'lasanha'

    ]
];

var_dump($listacompras);

echo '<pre>';
print_r($listacompras);
echo '</pre>';

echo $listacompras ['frutas'][2];

$listacompras['frutas'][] = 'pera';

echo '<pre>';
print_r($listacompras);
echo '</pre>';

##excluir item do array
$listacompras['frutas'][1] = '';

echo '<pre>';
print_r($listacompras);
echo '</pre>';

echo '<hr>';

$listacompras =[
    12=> 'arroz',
    26=> 'feijão',
    22 => 'banana',
    36 => 'maça',
];

//imprimir o indice e o valor
foreach ($listacompras as $chave => $item){
    echo "<strong>informações do produto</strong>";

    echo "chave do indice é: $chave  <br>";
    echo "o valor é $item <br>";
    echo "<hr>";
}


