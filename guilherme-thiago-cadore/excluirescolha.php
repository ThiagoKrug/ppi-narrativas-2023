<?php

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();

// receber os dados do formulário
$id = $_GET['id'];

$sql = "DELETE FROM escolha WHERE id_escolha=$id";
header('location: listaescolha.php');

// executa o comando no BD

mysqli_query($conexao,$sql);