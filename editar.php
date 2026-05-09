<?php

include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM series
        WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
</head>
<body>

    <h1>Editar Série</h1>

    <form 
        action="atualizar.php"
        method="POST"
        enctype="multipart/form-data"
    >

        <input 
            type="hidden"
            name="id"
            value="<?php echo $dados['id']; ?>"
        >

        <input 
            type="hidden"
            name="fotoAntiga"
            value="<?php echo $dados['foto']; ?>"
        >

        <input 
            type="text"
            name="nome"
            value="<?php echo $dados['nome']; ?>"
        >

        <br><br>

        <input 
            type="number"
            name="ano"
            value="<?php echo $dados['ano']; ?>"
        >

        <br><br>

        <input 
            type="text"
            name="estilo"
            value="<?php echo $dados['estilo']; ?>"
        >

        <br><br>

        <img 
            src="<?php echo $dados['foto']; ?>"
            width="150"
        >

        <br><br>

        <input type="file" name="foto">

        <br><br>

        <button type="submit">
            Atualizar
        </button>

    </form>

</body>
</html>