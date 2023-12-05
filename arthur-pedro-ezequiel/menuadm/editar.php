<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_POST['id'];
$audio = $_POST['audio'];
$imagem = $_POST['imagem'];
$nome=$_POST['nome'];
$texto=$_POST['texto'];


$sql = "UPDATE cena SET  
 audio= '$audio', imagem='$imagem',nome ='$nome', texto='$texto' WHERE id_cena = $id";

// executa o comando no BD
mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editado com sucesso.</h1><br>
    <a href="listar.php"> Consultar Lista </a>
</body>
</html>