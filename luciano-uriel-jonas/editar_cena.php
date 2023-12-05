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
        <label>Conteudo:</label>
        <input type="text" name="conteudo_historia" size="100">
        <br>
        <br>
        <label>Imagem:</label>
        <input type="text" name="imagem" size="100">
        <br>
        <br>
        <input type="submit" value="Editar">
        <hr>
        <a href="crud.php">Voltar</a>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se o formulário foi enviado

    if (isset($_POST["id_cena"]) && isset($_POST["conteudo_historia"]) && isset($_POST["imagem"])){
        $id_cena = $_POST['id_cena'];
        $conteudo_historia = $_POST['conteudo_historia'];
        $imagem = $_POST['imagem'];
        
        
        $sql = "UPDATE historia SET conteudo_historia = '$conteudo_historia', 
        imagem = $imagem WHERE id_cena = $id_cena";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>
</body>
</head>