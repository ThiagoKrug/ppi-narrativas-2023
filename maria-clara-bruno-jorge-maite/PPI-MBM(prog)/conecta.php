<?php

$bdServidor = "localhost"; 
$bdUsuario = "root"; 
$bdSenha = ""; 
$bdBanco = "cidade_perdida";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_error()) {
    echo "Problemas para conectar no banco. Erro: "; 
    echo mysqli_connect_error();
    die();
}