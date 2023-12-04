<?php

// Receber os dados do formulário
$nome = $_GET['nome'];
$audio = $_GET['audio'];
$imagem = $_GET['imagem'];
$texto = $_GET['texto'];
// Conectar ao BD
include("conecta.php");

// Montar o comando SQL
$sql = "INSERT INTO cena(nome,audio,imagem,texto) VALUES ('$nome','$audio','$imagem','$texto')";

// Executar o comando SQL
mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cadastrado com sucesso</h1>
    <hr>
    <a href="listar.php">Ir para a lista</a><br>
    <a href="menuadmin.php">Ir para ao menu</a>
</body>
</html>