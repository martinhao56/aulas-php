<?php

$nome = "Leonardo";
$sobrenome = "martinhao";
$idade = "21";
$anoNascimento = 2002;
$anoatual = 2024;

echo $nome;
echo "<hr>";
echo $sobrenome;
echo "<hr>";
echo "$nome $sobrenome";
echo "<hr>";
echo 'meu nome é: '. $nome. ' '.$sobrenome;
echo "<hr>";
echo "a caixa d'agua está vazia";
echo "<hr>";
echo 'A caixa d\'agua está vazia';
echo "<hr>";
echo "a caixa d'agua está \"vazia\"";
echo "<hr>";

//==================================//
//operadores ariméticos
//soma +
//subtração
//multiplicação *
//divisão /
//--- Resto da divisão %
//==================================//

echo "minha idade é: ". $anoatual - $anoNascimento;
echo "<hr>";

$idade = $anoatual - $anoNascimento;
echo "Minha idade é: $idade";
