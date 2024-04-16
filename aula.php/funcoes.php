<?php

header("Content-Type: Text/html; charset=utf-8");

$nome = "Leomartinhao_ <BR>";

echo $nome;

// converte uma string para maiusculo
echo strtoupper($nome);

// converte uma string para minusculo
echo strtolower($nome);

// coverte para maiusculo a primeira letra da palavra
echo ucwords($nome);

// converte tudo para minusculo e depois a primeira letra en naiusculo
echo ucfirst(strtolower($nome));

echo "<hr>";

$arquivo = "logotipo senac.jpg";
echo $arquivo;

echo "<br>";

echo str_replace(" ", "-", $arquivo);

echo "<hr>";

$partes = explode(".", $arquivo);
var_dump($partes);
echo end($partes); // retorna p ultimo item do array

echo "<hr>";
echo "novonome." . end($partes);

echo "<hr>";
echo md5(time()) . "." . end($partes);//criar nome aleatorio

echo "<hr>";


// 0006
// 6000

$numero = 36;

echo str_pad($numero, 5,0, STR_PAD_LEFT);

echo "<hr>";

echo str_repeat("leomartinhao", 50);

echo "<hr>";


$valor = 1250.50;

echo "R$ ". number_format($valor, 2,",", ".");

$valor = "1.250,50";

$valorDB = str_replace(",", ".", str_replace(".","",$valor));
echo "<hr>";

echo $valorDB;

echo "<hr>";

$data = "10/04/2024";

$dataDB = substr($data,6,4)."-".substr($data, 3,2). "-" . substr($data, 0, 2);

echo $dataDB;






