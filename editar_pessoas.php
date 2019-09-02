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
		<meta charset="utf-8">
		<title>Editar Entrevistados</title>		
	</head>
	<body style="text-align: center; margin: 10% auto;">
		
		<h1>Editar Usuário</h1>
		
		<form method="POST" action="salvar_edicao.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id_pessoa']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
			
			<input onClick="return confirm('Deseja atualizar o registro?');" type="submit" value="Salvar edição">
        </form>
    </body>
</html>

<?php
$conexao->close();
exit;
?>