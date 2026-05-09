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
<body>

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

    <?php while($dados = mysqli_fetch_assoc($resultado)){ ?>

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

        <hr>

    <?php } ?>

    <a href="index.php">Voltar</a>

</body>
</html>