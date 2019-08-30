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
// $data_reg = date_create()->format('d-m-Y H:i:s');

$sql = "INSERT INTO pessoas (nome, email, telefone, data_de_nasc, estuda, pretencao_salarial, descricao, data_reg) VALUES ('$nome', '$email', '$telefone', date_format(str_to_date('$data_de_nasc', '%d/%m/%Y'), '%Y-%m-%d'), '$estuda', '$pretencao_salarial', '$descricao', NOW())";

if($conexao->query($sql) === TRUE) {
    $_SESSION['pessoa_inserida'] = true;
}

$conexao->close();
header('Location: entrevistados.php');
exit;

?>