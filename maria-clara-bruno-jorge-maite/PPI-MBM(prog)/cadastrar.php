<?php

// Receber os dados do formulário
$texto = $_POST['texto'];
$imagem = $_POST['imagem'];

// Conectar ao BD
include("conecta.php");

// Montar o comando SQL
$sql = "INSERT INTO historia(texto, imagem) VALUES ('$texto', '$imagem')";

// Executar o comando SQL
mysqli_query($conexao, $sql);
echo "<h1>Cadastrado com sucesso!</h1>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
    <style> 
        a{ 
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: #fff; /* Cor do texto */
            background-color: #007bff; /* Cor do botão (azul) */
            }
        a:hover{
            background-color: #0056b3;
            } 
    </style>
</head>
<body>
    <a href="formcad.html"> Voltar </a>
    <a href="listar.php"> Consultar </a>
</body>
</html>