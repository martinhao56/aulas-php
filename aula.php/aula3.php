<?php

echo "<h1>trabalho com estrutura condicional</h1>";

$nome = "Leonardo";
$idade = 21;
$email = "martinhaoleonardo252@gmail.com";
$senha = "123456789";
$perfil = "estudante";
$permissao = true;

//////////////////////////////////////////////////////////////
echo "<h2>exemplo do if (se....) </h2>";

if ($idade>=21) {
    echo "o usuario $nome é maior de idade";
}

echo "<hr>";

echo "<h2>exemplo de if e else (se... entao..senao...</h2>";

if($email == "martinhaoleonardo252@gmail.com" && $senha == "123456789"){
    echo "usuario logado";
}else{
    echo "usuario ou senha invalido";
}

echo "<hr>";

if($perfil == "estudante" || $perfil == "professor"){
    echo "paga meia entrada";
}else{
    echo "paga o valor cheio";
}

echo "<hr>";
//////////////////////////////////////////////////////////////

$nota1 = 8;
$nota2 = 9;

if($nota1 >= 0 && $nota1 <= 10){
    if ($nota2 >= 0 && $nota2 <= 10){
        $media = ($nota1 + $nota2) /2;

        if ($media >= 7){
            echo "aprovado";

        }else{
            echo "reprovado";
        }
    }else{
        echo "nota 2 invalida.";
    
    }

}else{
    echo "nota 1 invalida.";

}




