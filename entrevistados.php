<?php 
include('verify_login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Entrevistados | Home </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
        <div class="login-page">
          <div class="form">
              <h1>HOME</h1>
              <h3>Bem vindo, <?php echo $_SESSION['usuario'];?>.</h3>
                <button class="new-register"><a>Novo Entrevistado</a></button>
                <form class="register-form">
                    <input type="text" placeholder="Nome" required/>
                    <input type="text" placeholder="Endereço de Email" required/>
                    <input type="text" placeholder="Telefone" required/>
                    <input type="text" placeholder="Data de Nascimento" required/>
                    <input type="text" placeholder="Cursando Faculdade ?" required/>
                    <input type="text" placeholder="Pretenção Salarial" required/>
                    <input type="text" placeholder="Habilidades do Candidato"required/>
                    <button>Criar</button>
                </form>
                <form>
                    <button class="new-register">Ver Cadastrados</button>
                </form>
          <div>
            <h3><a href="logout.php">Sair</a></h3>
          </div>
          </div>
        </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src='main.js'></script>

</html>