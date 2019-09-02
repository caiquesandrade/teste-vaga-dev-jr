<?php
session_start();
include('conexao.php');


$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

//Validação se o usuário existe ou não

$sql = "select count(*) as total from usuarios where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    echo "existe";
}

// Faz inserção na tabela de dados usuarios de acordo com as informações que o usuário digitar.

$sql = "INSERT INTO usuarios (usuario, senha, email, data_reg) VALUES ('$usuario', '$senha', '$email', NOW())";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
?>