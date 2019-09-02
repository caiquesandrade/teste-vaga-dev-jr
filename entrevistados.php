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
        <?php 
            if(isset($_SESSION['pessoa_inserida'])):
        ?>
        <div class="container msg-ok">
            <p>Entrevistado já foi favoritado.</p>
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
                    <input type="email" placeholder="Endereço de Email" name="email"  required/>
                    <input type="tel" placeholder="Telefone" name="telefone" onkeypress="return telMask(this, event);" maxlength="14" required/>
                    <input type="text" placeholder="Data de Nascimento" name="data_de_nasc" onkeypress="return dateMask(this, event);" maxlength="10" required/>
                    <input type="text" placeholder="Cursando Faculdade ?" name="estuda"  required/>
                    <input type="text" placeholder="Pretenção Salarial" name="pretencao_salarial" onkeypress="return preco(this, event);" required/>
                    <textarea type="text" placeholder="Habilidades do Candidato" name="descricao" style="vertical-align: top;" required></textarea>
                    <button type="submit" >Criar</button>
              </form>
              <form>
              
                  <button onclick="javascript:abrir('favoritos.php');">Ver Favoritos</button>
              </form>
              <div>
                <h3><a href="logout.php">Sair</a></h3>
              </div>
          </div>
        </div>
        <div class="container tabela">
          <table>
            <tr>
              <td>Nome</td>
              <td>E-mail</td>
              <td>Data de Cadastro</td>
              <td>Ação</td>
            </tr>
            <?php while($dado = $con->fetch_array()) { ?>
            <tr>
              <td><?php echo $dado['nome']; ?></td>
              <td><?php echo $dado['email']; ?></td>
              <td><?php echo date('d/m/Y', strtotime($dado['data_reg'])); ?></td>
              <td>
                <a href="javascript:abrir('editar_pessoas.php?codigo=<?php echo $dado['id_pessoa'];?>');"><img src="img/edit.png" alt="Edit item" height="32" width="32"></a>
                <a href="excluir_pessoa.php?codigo=<?php echo $dado['id_pessoa']; ?>"><img src="img/delete.png" alt="Delete item" height="32" width="32"></a>
                <a href="incluir_fav.php?codigo=<?php echo $dado['id_pessoa']; ?>"><img src="img/favorite.png" alt="Favorite item" height="32" width="32"></a>
                <a href="javascript:abrir('detalhe.php?codigo=<?php echo $dado['id_pessoa'];?>');"><img src="img/detail.png" alt="Detail item" height="32" width="32"></a>
              </td>
            </tr>
            <?php } ?>
            </table>
          </div>      
</body>
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous" type="text/javascript">
  </script>
  <script src='main.js'></script>
  
  <script>
  
</script>
</html>