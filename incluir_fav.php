<?php
// Aqui você se conecta ao banco
include('conexao.php');

$id = $_GET['codigo'];
$result_usuario = "SELECT * FROM pessoas WHERE id_pessoa = '$id'";

$result = mysqli_query($conexao, $result_usuario);
$row = mysqli_fetch_assoc($result);

if($row['favorito'] == 's') {
    $_SESSION['usuario_existe'] = true;
    header('Location: entrevistados.php');
    exit;
}

$sql = mysqli_query($conexao, "UPDATE pessoas SET favorito = 's' WHERE id_pessoa = '$id'");

mysqli_close($conexao);

header('Location: entrevistados.php');
exit;

?>