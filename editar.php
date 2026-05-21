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
<style>
body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background-color: #e6e3e3ff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
}

h1 {
    color: #1a73e8;
    margin-bottom: 20px;
    font-weight: 500;
}

form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 1 5px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 350px;
    display: flex;
    flex-direction: column;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px; 
    border: 1.5px solid #ddd;
    border-radius: 6px;
    box-sizing: border-box; 
    font-size: 14px;
    transition: border-color 0.3s;
}

input:focus {
    outline: none;
    border-color: #1a73e8;
}

input[type="file"] {
    margin-bottom: 20px;
    font-size: 13px;
    color: #555;
}

button[type="submit"] {
    background-color: #1a73e8;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #1557b0;
}

a {
    margin-top: 15px;
    text-decoration: none;
    color: #5f6368;
    font-size: 14px;
}

a:hover {
    color: #1a73e8;
    text-decoration: underline;
}
</style>
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