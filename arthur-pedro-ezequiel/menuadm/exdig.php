<?php


include("conecta.php");


$id = $_GET['id'];

$sql = "DELETE FROM dialogos_textos WHERE id_dialogo=$id";

// executa o comando no BD
mysqli_query($conexao,$sql); 
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
    <h1>Dialogo excluido</h1>
    <hr>
    <a href="listar.php">voltar</a>
</body>
</html>