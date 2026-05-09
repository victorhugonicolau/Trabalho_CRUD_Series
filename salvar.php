<?php

include("conexao.php");

$nome = $_POST['nome'];
$ano = $_POST['ano'];
$estilo = $_POST['estilo'];

$foto = $_FILES['foto'];

$nomeFoto = $foto['name'];

$caminho = "imagens/" . $nomeFoto;

move_uploaded_file(
    $foto['tmp_name'],
    $caminho
);

$sql = "INSERT INTO series
(nome, ano, estilo, foto)

VALUES

('$nome', '$ano', '$estilo', '$caminho')";

mysqli_query($conexao, $sql);

header("Location: listar.php");

?>