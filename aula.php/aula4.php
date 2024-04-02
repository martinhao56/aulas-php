<?php

//exemplo de switch...case
//imprima na tela o nome do mês referente ap número.

$mes = 2;

switch ($mes) {
    case 1:
        echo "janeiro";
        break;

    case 2:
        echo "fevereiro";
        break;

    case 3:
        echo "março";
        break;
    default:
        echo "o numero do mês é invalido";

}


switch ($mes) {
    case($mes <= 3):
        echo "estamos no 1º trimestre no ano";
        echo "ano atual 2024";
        break;

    case($mes <= 6):
        echo "estamos no 2º trimestre no ano";
        echo "ano atual 2024";

    case($mes <= 9):
        echo "estamos no 3º trimestre no ano";
        echo "ano atual 2024";
        break;
    case($mes <= 12):
        echo "estamos no 4º trimestre no ano";
        echo "ano atual 2024";
        break;
    default:
        echo "o numero do mês é invalido";
}