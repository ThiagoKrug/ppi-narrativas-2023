<?php

// Receber os dados do formulário
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();
// Montar o comando SQL
$sql = "INSERT INTO usuario(usuario, email, senha) VALUES ('$usuario','$email', '$senha')";

// Executar o comando SQL
mysqli_query($conexao, $sql);
header('Location: index.php');