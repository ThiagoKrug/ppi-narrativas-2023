<?php

// Receber os dados do formulário
$idhist = $_POST['idhist'];
$historia = $_POST['descricao'];
$img = $_POST['imagem'];

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();
// Montar o comando SQL
$sql = "INSERT INTO historia(id_historia,descricao, imagem) VALUES ('$idhist','$historia','$img')";
header('location: listahist.php');

// Executar o comando SQL
mysqli_query($conexao, $sql);