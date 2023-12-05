<?php

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();

// receber os dados do formulário
$id = $_GET['id'];

$sql = "DELETE FROM historia WHERE id_historia=$id";
header('location: listahist.php');
// executa o comando no BD
mysqli_query($conexao,$sql);