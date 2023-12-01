<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_GET['id'];

$sql = "TRUNCADE TABLE historia";

// executa o comando no BD
mysqli_query($conexao,$sql);