<?php

$id = $_GET['id'];
$id_destino = $_GET['id_destino'];

// Receber os dados do formulário
$opcao = $_GET["opcao"];

// conectar ao BD
include("../conecta.php");

// Montar o comando SQL
$sql = "INSERT INTO escolha(opcao, id_historia, id_destino) values ('$opcao', $id, $id_destino)";

// Executar o comando SQL
mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad-escolha</title>
</head>
<body>
    <h1> Escolha cadastrada com sucesso! </h1>
    <a href="index.php">Listar historia</a>
</body>
</html>