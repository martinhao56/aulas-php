<?php require_once "../autenticacao/verificarLogin.php" ?>  

 <?php include_once "../includes/cabecalho.php" ?>

 <div class="container">

 <?php include_once "../includes/cabecalhoAdmin.php" ?>

      
  <main class="row">
    <?php include_once "../includes/menuAdmin.php" ?>
     
      <div id="conteudo" class="col-md-10 mt-3">
          <h2>Seja bem-vindo, <?=$_SESSION['nome'] ?></h2>
      </div>
  </main>
 
  <?php include_once "../includes/rodapeAdmin.php"?>

</div>
 




  <? require_once "../include/rodape.php" ?>