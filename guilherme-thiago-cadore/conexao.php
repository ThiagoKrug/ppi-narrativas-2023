<?php
function conectar()
{
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "ppi-historia";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conexao) {
        mysqli_set_charset($conexao,"utf8mb4");
        return $conexao;
    } else {
        echo "erro ao conectar a base dedos" .
            mysqli_connect_error();
        die();
    }
}
