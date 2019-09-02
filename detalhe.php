<?php
session_start();
include_once("conexao.php");



$id = $_GET['codigo'];
$result_usuario = "SELECT * FROM pessoas WHERE id_pessoa = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Entrevistados | Detalhe </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    
</head>
	<body style="text-align: center; margin: 10% auto;">
<<<<<<< HEAD
	    <div class="form">
            <h3>Detalhe de <strong><?php echo $row_usuario['nome']; ?></strong> :</h3>
            <table>
                <tr>
                <td>Telefone</td>
                <td><?php echo $row_usuario['telefone']; ?></td>
                </tr>
                <tr>
                    <td>Data de Nascimento</td>
                    <td><?php echo date('d/m/Y', strtotime($row_usuario['data_de_nasc'])); ?></td>
                </tr>
                <tr>
                    <td>Qual curso</td>
                    <td><?php echo $row_usuario['estuda']; ?></td>
                </tr>
                <tr>
                <td>Pretenção salarial</td>
                <td><?php echo $row_usuario['pretencao_salarial']; ?></td>
                </tr>
                <tr>
                    <td>Habilidades do candidato</td>
                    <td><?php echo $row_usuario['descricao']; ?></td>
                </tr>
            </table>
=======
		
		
        
        <div class="form"s>
        <h3>Detalhe de <strong><?php echo $row_usuario['nome']; ?></strong> :</h3>
        <table>
            <tr>
              <td>Telefone</td>
              <td><?php echo $row_usuario['telefone']; ?></td>
            </tr>
            <tr>
                <td>Data de Nascimento</td>
                <td><?php echo date('d/m/Y', strtotime($row_usuario['data_de_nasc'])); ?></td>
            </tr>
            <tr>
                <td>Qual curso</td>
                <td><?php echo $row_usuario['estuda']; ?></td>
            </tr>
            <tr>
              <td>Pretenção salarial</td>
              <td><?php echo $row_usuario['pretencao_salarial']; ?></td>
            </tr>
            <tr>
                <td>Habilidades do candidato</td>
                <td><?php echo $row_usuario['descricao']; ?></td>
            </tr>
        </table>
>>>>>>> a38865289421d6568bd75be60678ae9ac0e79abf
        </div>
    </body>
</html>

<?php
$conexao->close();
exit;
?>