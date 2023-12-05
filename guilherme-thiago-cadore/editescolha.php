<?php

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();

// receber os dados do formulário
$id = $_POST['id_escolha'];
$idorigem = $_POST['id_origem'];
$iddestino = $_POST['id_destino'];
$descricao = $_POST['descricao_alt'];
header('location: listaescolha.php');
$sql = "UPDATE escolha SET id_origem =$idorigem ,id_destino = $iddestino, 
descricao_alt = '$descricao' WHERE id_escolha = $id";

// executa o comando no BD
mysqli_query($conexao,$sql); 