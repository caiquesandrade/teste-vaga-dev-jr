<?php
// Aqui você se conecta ao banco
include('conexao.php');

$id = $_GET['codigo'];
$result_usuario = "SELECT * FROM pessoas WHERE id_pessoa = '$id'";

$result = mysqli_query($conexao, $result_usuario);
$row = mysqli_fetch_assoc($result);

$sql = mysqli_query($conexao, "UPDATE pessoas SET favorito = 'n' WHERE id_pessoa = '$id'");

mysqli_close($conexao);

echo    "<script>
            window.onunload = fechaEstaAtualizaAntiga;
            function fechaEstaAtualizaAntiga() {
                window.opener.location.reload();
            }
            window.close()
        </script>";

?>