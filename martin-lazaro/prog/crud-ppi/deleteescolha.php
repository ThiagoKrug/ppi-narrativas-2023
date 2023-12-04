<?php

//conectar ao BD
include("../conecta.php");

//receber os dados do formulario
$id = $_GET['id'];


$sql = "DELETE FROM escolha WHERE id_escolha= $id";

//executar o comando no BD
mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEL-escolha</title>
</head>
<body>
    <h1> Escolha excluida com sucesso! </h1>
    <a href="index.php">Listar historia</a>
</body>
</html>