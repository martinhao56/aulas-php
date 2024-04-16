<?php

class Veiculo{
    public $cor;
    private$marca;
    private $modelo;
    public $tipo;

    public function setMarca ($marca){
        //validação
        $this ->marca = $marca;
    }

        public function setModelo ($modelo){
            $this ->modelo = $modelo;
        }

        



}

$carro1 = new  Veiculo ();
$carro1->cor = "Preto";
$carro1->setMarca("vw");
$carro1->setModelo("gol quadrado");
$carro1->tipo = "hath";

echo "objeto carro 1 <br>";
echo $carro1->cor;
echo "<hr>";

$carro2 = new  Veiculo ();
$carro2->cor = "Vermelho";
$carro2->setMarca("Fiat");
$carro2->setModelo("Uno");
$carro2->tipo = "hath";

echo "objeto carro 2 <br>";
echo $carro2->cor;