<?php

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();

// receber os dados do formulário
$id = $_POST['idhist'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];

$sql = "UPDATE historia SET id_historia ='$id' ,descricao = '$descricao', 
imagem = $imagem WHERE id_historia = $id";
header('location: listahist.php');

// executa o comando no BD
mysqli_query($conexao,$sql);
