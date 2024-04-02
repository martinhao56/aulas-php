<?php
/* imprimir tabuada do 1 ao 5 */

$tabuada = readline ("digite o numero da tabuada: ");

for ($i = 1; $i <= $tabuada ; $i++) {
    echo "Tabuada do $i:\n";

    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado\n";
    }

}

/*imprimir tabuada do 10 ao 20 */

/* imprimir tabuada do 1 ao 5 */

$tabuada = readline ("digite o numero da tabuada: ");

for ($i = 1; $i <= $tabuada ; $i++) {
    echo "Tabuada do $i:\n";

    for ($j = 1; $j <= 20; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado\n";
    }

}
