<?php
// Aqui você se conecta ao banco
include('conexao.php');

$id = $_GET['codigo'];
$result_usuario = "SELECT * FROM pessoas WHERE id_pessoa = '$id'";

$sql = mysqli_query($conexao, "DELETE FROM pessoas WHERE id_pessoa = '$id'");

mysqli_close($conexao);

header('Location: entrevistados.php');
exit;

?>