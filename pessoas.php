<?php
session_start();
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_de_nasc = $_POST['data_de_nasc'];
$estuda = $_POST['estuda'];
$pretencao_salarial = $_POST['pretencao_salarial'];
$descricao = $_POST['descricao'];
$data_reg = date_create()->format('d-m-Y H:i:s');


echo $nome."</br>";
echo $data_reg."</br>";
echo $email."</br>";
echo $telefone."</br>";
echo $data_de_nasc."</br>";
echo $estuda."</br>";
echo $pretencao_salarial."</br>";
echo $descricao."</br>";

$sql = "INSERT INTO pessoas (nome, email, telefone, data_de_nasc, estuda, pretencao_salarial, descricao, data_reg) VALUES ('$nome', '$email', '$telefone', '$data_de_nasc', '$estuda', '$pretencao_salarial', '$descricao', '$data_reg')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['pessoa_inserida'] = true;
}

$conexao->close();


?>