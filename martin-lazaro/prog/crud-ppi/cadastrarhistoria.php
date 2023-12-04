<?php

// Receber os dados do formulário
$texto = $_POST["texto"];

// conectar ao BD
include("../conecta.php");

// Montar o comando SQL
$sql = "INSERT INTO historia(texto) values ('$texto')";

// Executar o comando SQL
mysqli_query($connect, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadhistoria</title>
</head>
<body>
    <h1>Cadastrado com sucesso!</h1>
    <a href="index.php">Listar historia</a>    
</body>
</html>