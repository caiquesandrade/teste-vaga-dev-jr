<?php
include('conexao.php');

$consulta = "SELECT * FROM pessoas";
$con      = $conexao->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
 
</head>
<body>
  <table border="1">
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
        <a href="usu_editar.php?codigo=<?php echo $dado['id_pessoa']; ?>">Editar</a>
        <a href="usu_excluir.php?codigo=<?php echo $dado['id_pessoa']; ?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>