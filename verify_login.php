<?php 
//Se a sessão do usuário não existir, redirecionar.
session_start();
if(!$_SESSION['usuario']) {
    header('Location: index.php');
    exit();
}
?>