<?php
session_start();
include('conecta.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	echo "";
	exit();
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select usuario from usuario where usuario COLLATE utf8mb4_general_ci = '{$usuario}' and senha = ('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php#paralogin');
	exit();
}