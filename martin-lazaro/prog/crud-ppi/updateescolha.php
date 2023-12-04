<?php

// Conectar ao BD
include("../conecta.php");

//Receber os dados do formulário
$id = $_POST["id"];
$opcao= $_POST['opcao'];

$sql = "UPDATE escolha SET opcao = '$opcao' WHERE id_escolha = $id";

//executar o comando no BD
mysqli_query($connect,$sql);    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exc-escolha</title>
</head>
<body>
    <h1> Escolha editada com sucesso! </h1>
    <a href="index.php">Listar histórias</a>
</body>
</html>