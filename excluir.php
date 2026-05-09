<?php

include("conexao.php");

$id = $_GET['id'];

$sqlBusca = "SELECT * FROM series
             WHERE id = $id";

$resultado = mysqli_query($conexao, $sqlBusca);

$dados = mysqli_fetch_assoc($resultado);

unlink($dados['foto']);

$sql = "DELETE FROM series
        WHERE id = $id";

mysqli_query($conexao, $sql);

header("Location: listar.php");

?>