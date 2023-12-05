<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label>ID Cena:</label>
        <input type="text" name="id_cena" size="100">
        <br>
        <br>
        <input type="submit" value="Excluir">
        <hr>
        <a href="crud.php">Voltar</a>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se o formulário foi enviado

    if (isset($_POST["id_cena"])){
        $id_cena = $_POST['id_cena'];       
        
        $sql = "DELETE FROM `historia` WHERE id_cena=$id_cena";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>
</body>
</head>