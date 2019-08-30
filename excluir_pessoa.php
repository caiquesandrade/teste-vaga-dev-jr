<?php
// Aqui você se conecta ao banco
include('conexao.php');

$id        = $_POST["id"];
$nome      = $_POST["nome"];
$email = $_POST["email"];


$sql = mysqli_query($conexao, "DELETE FROM pessoas WHERE id_pessoa = $id");

mysqli_close($conexao);

echo    "<script>
            window.onunload = fechaEstaAtualizaAntiga;
            function fechaEstaAtualizaAntiga() {
                window.opener.location.reload();
            }
            window.close()
        </script>";
?>