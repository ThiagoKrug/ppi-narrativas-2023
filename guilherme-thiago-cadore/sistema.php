<?php
session_start();
require_once "conexao.php";
$conexao = conectar();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuario WHERE id_usuario LIKE '%$data%' or usuario LIKE '%$data%' or email LIKE '%$data%' ORDER BY id_usuario DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
    }
    $result = $conexao->query($sql);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <STYLE TYPE="text/css">
        BODY {
            background-image: url(imagens/fundo.png);
        }
    </STYLE>
<body>
    <div id = "corpao">

        <div class= "escolhas"> <button><a href="jogar.php"> jogar </a></button><br> <br> </div>
        <div class= "escolhas"> <button><a href="criarhist.php"> criar historia </a></button><br> <br> </div>
        <div class= "escolhas"> <button><a href="sair.php"> sair </a></button><br> <br> </div>
    </div>

</body>
</html>