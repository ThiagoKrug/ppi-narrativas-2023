<?php

session_start(); 

if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['senha']))
{
    include('conecta.php');
    $usuario = $_POST['user'];
    $senha = $_POST['senha'];

    $sql= "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado= mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)< 1){

        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('Location: login.php?erro=1');
    }
    else{
        $_SESSION['user'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: inicio.php');
    }
}

else
{
    header('location: login.php');
}
?>