<?php
session_start();
include_once("conexao.php");

$consulta = "SELECT * FROM `pessoas` WHERE favorito = 's'";
$con      = $conexao->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Entrevistados | Favoritos </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    
</head>
	<body style="margin: 10% auto;">
	    <div class="form" style="max-width: 550px;">
            <h2>Entrevistados favoritos :</h2>
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
                    <a href="remove_fav.php?codigo=<?php echo $dado['id_pessoa']; ?>"><img src="img/delete.png" alt="Edit item" height="32" width="32"></a>
                    <a href="javascript:abrir('detalhe.php?codigo=<?php echo $dado['id_pessoa'];?>');"><img src="img/detail.png" alt="Detail item" height="32" width="32"></a>
                </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
    <script src='main.js'></script>
</html>

<?php
$conexao->close();
exit;
?>