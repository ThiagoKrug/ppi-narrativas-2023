<?php


include("conecta.php");


$id = $_GET['id_escolha'];
$texto=$_GET['texto'];
$destino=$_GET['id_destino'];


$sql = "UPDATE escolha SET  
texto='$texto', id_destino=$destino WHERE id_escolha= $id";


mysqli_query($conexao,$sql);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editado com sucesso</h1>
    <hr>
    
    <a href="menuadmin.php">Ir para o menu</a><br>
    <a href="listar.php">Ir para a lista de cenas</a><br>
</body>
</html>