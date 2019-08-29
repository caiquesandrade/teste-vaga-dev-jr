<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Entrevistados | Login </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
        <div class="login-page">
          <?php 
            if(isset($_SESSION['nao_autenticado'])):
          ?>
          <div class="container msg-fail">
            <p>Usuário ou Senha Incorretos</p>
          </div>
          <?php
            endif;
            unset($_SESSION['nao_autenticado']);
          ?>
            <div class="form">
              <form class="register-form" action="cadastrar.php" method="POST">
                <input type="text" placeholder="Nome"/>
                <input type="password" placeholder="Senha"/>
                <input type="text" placeholder="Endereço de Email"/>
                <button>Criar</button>
                <p class="message">Já tem uma conta ? <a href="#">Entrar</a></p>
              </form>
              <form class="login-form" method="POST" action="login.php">
                <input name="usuario" type="text" placeholder="Usuário" autofocus=""/>
                <input name="senha" type="password" placeholder="Senha"/>
                <button type="submit">Logar</button>
                <p class="message">Não tem uma conta? <a href="#">Criar uma conta </a></p>
              </form>
          </div>
        </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src='main.js'></script>

</html>