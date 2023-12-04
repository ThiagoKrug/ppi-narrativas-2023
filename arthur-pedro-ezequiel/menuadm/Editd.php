<?php


include("conecta.php");


$id = $_POST['id_dialogo'];
$texto=$_POST['texto'];



$sql = "UPDATE dialogos_textos SET  
texto='$texto' WHERE id_dialogo=$id";


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