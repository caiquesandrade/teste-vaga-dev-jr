<?php
session_start();
include('conexao.php');

//Verificação para evitar que o usuário entre diretamente pela URL

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

//Projeteger contra ataque SQL Injection

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//Verificar se o login esta correto ou não

$query = "select usuario_id, usuario from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: entrevistados.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>