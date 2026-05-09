<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "catalogo_series";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if(!$conexao){
    die("Erro na conexão");
}

?>