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

<?php require_once "includes/cabecalho.php" ?>


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

  <?php require_once "includes/rodape.php" ?>




 