<?php

include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$estilo = $_POST['estilo'];

$fotoAtual = $_POST['fotoAntiga'];

if($_FILES['foto']['name'] != ""){

    $foto = $_FILES['foto'];

    $nomeFoto = $foto['name'];

    $caminho = "imagens/" . $nomeFoto;

    move_uploaded_file(
        $foto['tmp_name'],
        $caminho
    );

    $fotoAtual = $caminho;
}

$sql = "UPDATE series
        SET nome='$nome',
            ano='$ano',
            estilo='$estilo',
            foto='$fotoAtual'
        WHERE id='$id'";

mysqli_query($conexao, $sql);

header("Location: listar.php");

?>