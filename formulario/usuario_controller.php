<?php

//var_dump($_GET);

echo "<h1>Dados do usuario</h1>";
echo "<hr>";

echo "<strong>nome:</strong>" . $_POST['nome'];
echo "<br>";

echo "<strong>email:</strong>" . $_POST['email'];
echo "<br>";

echo "<strong>senha:</strong>" . $_POST['senha'];
echo "<br>";

echo "<strong>cep:</strong>" . $_POST['cep'];
echo "<br>";

echo "<strong>endereço</strong>" . $_POST['endereço'];
echo "<br>";

echo "<strong>numero:</strong>" . $_POST['numero'];
echo "<br>";

echo "<strong>complemento:</strong>" . $_POST['complemento'];
echo "<br>";

echo "<strong>bairro:</strong>" . $_POST['bairro'];
echo "<br>";

echo "<strong>cidade:</strong>" . $_POST['cidade'];
echo "<br>";

echo "<strong>estado:</strong>" . $_POST['estado'];
echo "<br>";

echo "<strong>genero:</strong>" . $_POST['genero'];
echo "<br>";

echo "<strong>cursos:</strong>" .implode(",", $_POST['cursos']);
echo "<br>";

echo "<strong>sugestao:</strong>" . $_POST['sugestao'];
echo "<br>";

echo "<strong>newsletter:</strong>" . $_POST['newsletter'];
echo "<br>";

