<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema</title>
</head>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    color: #333;
}

h1 {
    color: #2c3e50;
    margin-bottom: 30px;
    font-size: 2.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
}

a {
    text-decoration: none;
    margin: 10px 0;
    width: 200px; 
}

button {
    width: 100%;
    padding: 15px 25px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    border: none;
    border-radius: 8px;
    background-color: #3498db;
    color: white;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

button:hover {
    background-color: #2980b9;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

button:active {
    transform: translateY(0);
}

a[href="listar.php"] button {
    background-color: #2ecc71;
}

a[href="listar.php"] button:hover {
    background-color: #27ae60;
}
</style>
<body>

    <h1>Catálogo de Séries</h1>

    <a href="cadastrar.php">
        <button>Cadastrar Série</button>
    </a>

    <br><br>

    <a href="listar.php">
        <button>Listar Séries</button>
    </a>

</body>
</html>