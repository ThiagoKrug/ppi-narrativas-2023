<?php

$id = $_GET['id'];
$texto = $_GET['texto'];

include("conecta.php");


$sql = "INSERT INTO dialogos_textos(texto,id_cena) VALUES ('$texto',$id)";


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
    <a href="menuadmin.php">Ir para o menu</a>
</body>
</html>