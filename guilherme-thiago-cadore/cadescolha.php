<?php

// Receber os dados do formulário
$idorigem = $_POST['id_origem'];
$iddestino = $_POST['id_destino'];
$escolha = $_POST['descricao_alt'];


// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();
// Montar o comando SQL
$sql = "INSERT INTO escolha(id_origem, id_destino, descricao_alt) VALUES ('$idorigem','$iddestino','$escolha')";
header('location: listaescolha.php');

// Executar o comando SQL
mysqli_query($conexao, $sql);