<?php
session_start();

$nome = "Leonardo Martinhao";
$email = "martinhaoleonardo252@gmail.com";
$senha = "123456789";

if (isset($_SESSION['logado'])){
  if ($_SESSION['logado'] == true) {
    header("location: dashboard.php");
    exit;
  }
}

if (isset($_SESSION['lembrar'])){
  if ($_SESSION['lembrar'] == true) {
    $_SESSION['nome'] = $nome;
    $_SESSION['logado'] = true;
    header("location: dashboard.php");
    exit;
  }
}


if (isset($_POST['btnEntrar'])) {

  if ($email == $_POST['email'] && $senha == $_POST['senha']) {

    $_SESSION['nome'] = $nome;
    $_SESSION['logado'] = true;

    $lembrar = isset($_POST['lembrar']) ? true : false;

    if($lembrar){
      setcookie("lembrar", $email,time() + (86400 * 30), "/");
    }

    header("Location: dashboard.php");
    exit;


  } else {
    $erro = "Usuário ou Senha inválido";
  }


}


?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - BookMeNow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    #login {
      flex-basis: 400px;
      flex-grow: 0;
      flex-shrink: 1;
      /* flex: 0 1 400px; */

    }
  </style>

</head>

<body>

  <div class="container d-flex justify-content-center align-items-center vh-100">

    <div id="login" class="border p-3 rounded shadow-lg">
      <h2 class="text-center">Login</h2>

      <?php if (isset($erro)): ?>
        <div class="alert alert-danger">
          <?= $erro ?>
        </div>
      <?php endif; ?>

      <form action="login.php" method="post">
        <div class="mb-3">
          <label class="form-label" for="email">E-mail</label>
          <input type="text" name="email" class="form-control" id="email">
        </div>

        <div class="mb-3">
          <label class="form-label" for="senha">Senha</label>
          <input type="password" name="senha" class="form-control" id="senha">
        </div>

        <div class="mb-3 form-check">
          <input class="form-check-input" type="checkbox" name="lembrar" id="lembrar">
          <label class="form-check-label" for="lembrar">Lembrar-me</label>

        </div>

        <button name="btnEntrar" type="submit" class="btn btn-primary w-100">Entrar</button>


      </form>

    </div>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>