<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_POST['id'];
$texto= $_POST['texto'];
$imagem = $_POST['imagem'];

$sql = "UPDATE historia SET texto = '$texto', 
imagem = '$imagem' WHERE id_historia = '$id'";

// executa o comando no BD
mysqli_query($conexao,$sql);
echo "<h1> Editado com sucesso!</h1>";
?>
