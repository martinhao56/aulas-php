<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro de usuario</title>
</head>

<body>
    <!-- nome, e-mail, senha,telefone, endereço, genero(M,f,nd),NewsLetter -->

    <h1>Cadastro de usuario</h1>

    <form action="usuario_controller.php" method="post">

        <fieldset>
            <legend>Dados de acesso</legend>

            <p>
                <label for="nome">Nome: </label>
                <input name="nome" type="text" id="nome">
            </p>
            <p>
                <label for="email">e-mail:</label>
                <input name="email" type="text" id="email">
            </p>

            <p>
                <label for="senha">senha:</label>
                <input name="senha" type="password" id="senha">
            </p>

        </fieldset>

        <fieldset>
            <legend> Dados complementar</legend>
            <!--cep, endereço, numero, complemento, bairro, cidade -->

            <p>
                <label for="cep">cep:</label>
                <input name="cep" type="text" id="cep">
            </p>

            <p>
            <p>
                <label for="endereço">endereço:</label>
                <input name="endereço" type="text" id="endereço">
            </p>
            <p>
                <label for="numero">numero:</label>
                <input name="numero" type="text" id="numero">
            </p>

            <p>
                <label for="complemento">complemento:</label>
                <input name="complemento" type="text" id="complemento">
            </p>

            <p>
                <label for="Bairro">bairro:</label>
                <input name="bairro" type="text" id="bairro">
            </p>

            <p>
                <label for="cidade">cidade:</label>
                <input name="cidade" type="text" id="cidade">
            </p>

            <p>
                <label for="estado">estado:</label>
                <select name="estado" id="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
            </p>

            <p>
                genero:
                <label>
                    <input type="radio" name="genero" id="masculino" value="masculino" masculino>
                    Masculino
                </label>

                <label>
                    <input type="radio" name="genero" id="femenino" value="femenino" femenino>
                    femenino
                </label>

                <label>
                    <input type="radio" name="genero" id="gayson" value="gayson" gayson>
                    gayson
                </label>
            </p>

        </fieldset>

        <fieldset>
            <legend> selecione os cursos do seu interesse</legend>
            <p>
                <label>
                    <input type="checkbox" name ="cursos[]" value="informatica basica">informatica basica
                </label>
            </p>

            <p>
                <label>
                    <input type="checkbox" name ="cursos[]" value="php">php
                </label>
            </p>

            <p>
                <label>
                    <input type="checkbox" name ="cursos[]" value="HTML & CSS3">HTML & CSS3
                </label>
            </p>

            <p>
                <label>
                    <input type="checkbox" name ="cursos[]" value="JavaScript">JavaScript
                </label>
            </p>

            <p>
                <label>sugestao</label>
                <textarea name="sugestao" placeholder="digite sua sugestao  de curso ou deixe uma observação...." cois="50" rows="5"></textarea>
            </p>
        </fieldset>

        <p>
            <label>
                <input type="checkbox" name="newsletter" value="sim">
                aceita receber nossas atividades
            </label>
        </p>

        <p>
            <button type="submit">cadastrar</button>
        </p>

    </form>

</body>

</html>