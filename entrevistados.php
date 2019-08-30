<?php 
include('verify_login.php');
include('conexao.php');

$consulta = "SELECT * FROM pessoas";
$con      = $conexao->query($consulta) or die($mysqli->error);

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
        <?php 
            if(isset($_SESSION['pessoa_inserida'])):
        ?>
        <div class="container msg-ok">
            <p>Entrevistado Cadastrado com Sucesso.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['pessoa_inserida']);
        ?>
          <div class="form">
              <h1>
                HOME
              </h1>
              <h3>
                Bem vindo, <?php echo $_SESSION['usuario'];?>.
              </h3>
              <button class="new-register"><a>Novo Entrevistado</a></button>
              <form class="register-form" action="pessoas.php" method="POST">
                    <input type="text" placeholder="Nome" name="nome"  required/>
                    <input type="text" placeholder="Endereço de Email" name="email"  required/>
                    <input type="text" placeholder="Telefone" name="telefone"  required/>
                    <input type="text" placeholder="Data de Nascimento" name="data_de_nasc"  required/>
                    <input type="text" placeholder="Cursando Faculdade ?" name="estuda"  required/>
                    <input type="text" placeholder="Pretenção Salarial" name="pretencao_salarial"  required/>
                    <input type="text" placeholder="Habilidades do Candidato" name="descricao" required/>
                    <button type="submit" >Criar</button>
              </form>
              <form>
                  <button class="new-register">Ver Cadastrados</button>
              </form>
              <div>
                <h3><a href="logout.php">Sair</a></h3>
              </div>
          </div>
        </div>
        <div style="margin: 5% auto; background-color: aliceblue; text-align: center;">
          <table >
            <tr>
              <td>Código</td>
              <td>Nome</td>
              <td>E-mail</td>
              <td>Data de Cadastro</td>
              <td>Ação</td>
            </tr>
            <?php while($dado = $con->fetch_array()) { ?>
            <tr>
              <td><?php echo $dado['id_pessoa']; ?></td>
              <td><?php echo $dado['nome']; ?></td>
              <td><?php echo $dado['email']; ?></td>
              <td><?php echo date('d/m/Y', strtotime($dado['data_reg'])); ?></td>
              <td>
                <a href="javascript:abrir('editar_pessoas.php?codigo=<?php echo $dado['id_pessoa'];?>');">Editar</a>
                <a href="usu_excluir.php?codigo=<?php echo $dado['id_pessoa']; ?>">Excluir</a>
                <a href="usu_excluir.php?codigo=<?php echo $dado['id_pessoa']; ?>">Destacar</a>
              </td>
            </tr>
            <?php } ?>
            </table>
          </div>      
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src='main.js'></script>
  <script langue="javascript">
    var abrir = function(URL) {
      window.open(URL, 'Teste', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');
    }
  </script>

</html>