<?php
session_start();
include('conexao.php');


$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$email = mysqli_real_escape_string($conexao, trim(md5($_POST['email'])));

//Validação se o usuário existe ou não

$sql = "SELECT count(*) FROM `usuario` WHERE usuario = '$usuario'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: index.php');
    exit;
}

$sql = "INSERT INTO usuario (usuario, senha, email, data_cadastro) VALUES ('$usuario', '$senha', '$email', NOW())";

if()

?>