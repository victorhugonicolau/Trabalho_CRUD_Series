<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Série</title>
</head>
<body>

    <h1>Cadastrar Série</h1>

    <form 
        action="salvar.php" 
        method="POST"
        enctype="multipart/form-data"
    >

        <input 
            type="text" 
            name="nome"
            placeholder="Nome da série"
        >

        <br><br>

        <input 
            type="number" 
            name="ano"
            placeholder="Ano"
        >

        <br><br>

        <input 
            type="text" 
            name="estilo"
            placeholder="Estilo"
        >

        <br><br>

        <input 
            type="file" 
            name="foto"
        >

        <br><br>

        <button type="submit">
            Salvar
        </button>

    </form>

    <br>

    <a href="index.php">Voltar</a>

</body>
</html>