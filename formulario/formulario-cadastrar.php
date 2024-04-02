<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro de usuario</title>
</head>

<body>

    <h1>Formulario de Cadastro</h1>

    <form action="" method="">

    campos com (*) são de preenchimentos obrigatório
    
        <fieldset>
            <legend>Dados de acesso</legend>

            <p>
                <label for="nome">Nome*: </label>
                <input name="nome" type="text" id="nome"> 
            </p>
            <p>
                <label for="email">e-mail*:</label>
                <input name="email" type="text" id="email">
            </p>

            <p>
                <label for="senha">senha:</label>
                <input name="senha" type="password" id="senha">
            </p>

        </fieldset>

        <fieldset>
            <legend>Dados do perfil</legend>
            <p>
            <label for="Dats de nascimento">data de nascimento:</label>
                <input name="data de nascimento" type="text" id="data de nascimento">
            </p>

            <p>
            <label for="foto perfil">foto perfil:</label>
                <input name="foto perfil" type="text" id="foto perfil"> nenhum arquivo selecionado
            </p>
            
        </fieldset>
 

    </form>

</body>

</html>