<?php

// Conectar ao BD
include("../conecta.php");

//Receber os dados do formulário
$id = $_POST["id"];
$texto = $_POST['texto'];

$sql = "UPDATE historia SET texto = '$texto' WHERE id_historia = $id";

//executar o comando no BD
mysqli_query($connect,$sql);    


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
    <h1> Editado com sucesso! </h1>
    <a href="index.php">Listar histórias</a>
</body>
</html>