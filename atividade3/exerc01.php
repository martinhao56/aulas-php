<?php

$cod = 100;
$qtde = 2;

switch ($cod) {

    case 100:
        echo " codigo:100";
        echo "<br>";
        echo "Produto:cachorro quente";
        echo "<br>";
        echo "Quantidade: $qtde";
        echo "<br>";
        echo "valor : " . ($qtde * 1.70) ;
        break;

    case 101:
        echo"101";
        echo "<br>";
        echo "Produto:Bauru simples";
        echo "<br>";
        echo "Quantidade: $qtde";
        echo "<br>";
        echo "valor : " . ($qtde * 2.30) ;
        break;

    case 102:
        echo"102";
        echo "<br>";
        echo "Produto:bauru com ovo";
        echo "<br>";
        echo "Quantidade: $qtde";
        echo "<br>";
        echo "valor : " . ($qtde * 2.60) ;
        break;

    case 103:
        echo"103";
        echo "<br>";
        echo "Produto:hamburguer";
        echo "<br>";
        echo "Quantidade: $qtde";
        echo "<br>";
        echo "valor : " . ($qtde * 2.40) ;
        break;

    case 104:
        echo"104";
        echo "<br>";
        echo "Produto:cheeserburguer";
        echo "<br>";
        echo "Quantidade: $qtde";
        echo "<br>";
        echo "valor : " . ($qtde * 2.50) ;
        break;

    case 105:
        echo"105";
        echo "<br>";
        echo "Produto:refrigente";
        echo "<br>";
        echo "Quantidade: $qtde";
        echo "<br>";
        echo "valor : " . ($qtde * 1.00) ;

    default:
    echo "nao foi encontrado";
}


