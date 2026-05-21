<?php

include("conexao.php");

$pesquisa = "";

if(isset($_GET['pesquisa'])){
    $pesquisa = $_GET['pesquisa'];
}

$sql = "SELECT * FROM series
        WHERE nome LIKE '%$pesquisa%'";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Séries</title>
</head>
<style>
body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

h1 {
    color: #2c3e50;
    margin-bottom: 30px;
}

form {
    margin-bottom: 40px;
    display: flex;
    justify-content: center;
    gap: 10px;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 250px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2 {
    font-size: 1.1rem;
    margin: 10px 0;
    width: 100%;
}

img {
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    object-fit: cover;
    height: 220px; 
    width: 160px !important; 
}

p {
    margin: 5px 0;
    font-size: 0.9rem;
    color: #666;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

a {
    display: inline-block;
    margin: 5px;
    text-decoration: none;
    font-size: 0.8rem;
    color: #007bff;
    font-weight: bold;
}

a[href*="excluir"] {
    color: #dc3545;
}

hr {
    display: none; 
}

a[href="index.php"] {
    display: block;
    width: 100%;
    margin-top: 50px;
    font-size: 1rem;
    color: #333;
}
</style>
<body>
<div class = "container">
    <h1>Lista de Séries</h1>

    <form method="GET">

        <input 
            type="text"
            name="pesquisa"
            placeholder="Pesquisar série"
        >

        <button type="submit">
            Pesquisar
        </button>

    </form>

    <br>
    <div class="galeria" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    <?php while($dados = mysqli_fetch_assoc($resultado)){ ?>
        <div class="card" style="background: white; padding: 15px; border-radius: 10px; width: 180px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h2>
            <?php echo $dados['nome']; ?>
        </h2>

        <img 
            src="<?php echo $dados['foto']; ?>"
            width="150"
        >

        <p>
            Ano: <?php echo $dados['ano']; ?>
        </p>

        <p>
            Estilo: <?php echo $dados['estilo']; ?>
        </p>

        <a href="editar.php?id=<?php echo $dados['id']; ?>">
            Editar
        </a>

        <br>

        <a href="excluir.php?id=<?php echo $dados['id']; ?>">
            Excluir
        </a>
        </div>
        <hr>

    <?php } ?>
     
    <a href="index.php">Voltar</a>
    </div>
</div>
</body>
</html>