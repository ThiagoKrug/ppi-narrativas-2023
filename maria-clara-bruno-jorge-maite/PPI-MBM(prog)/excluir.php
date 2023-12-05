<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_GET['id'];

$sql = "DELETE FROM historia WHERE id_historia=$id";

// executa o comando no BD
mysqli_query($conexao,$sql);

echo "<h1> Excluido com sucesso! </h1>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @font-face {
        font-family: 'Valeria';
        src: url('ValeriaBoldGrunge.ttf') format('truetype');
        font-style: normal;
        font-weight: normal;
      }

      .titulo{
        color: white;
        justify-content: center;
        font-size: 170%;
        text-align: center;
        font-family: 'Valeria';
        }

      .btn-container {
        position: fixed;
        bottom: 10px;
        right: 10px;
        display: flex;
        flex-direction: column;
        }

      .btn{
        display: inline-block;
        padding: 30px 45px;
        font-size: 25px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        color: #fff; 
        background-color: #007bff;   
        }

      .btn:hover{
        background-color: #0056b3;
        }

      .socore-container{
        position: fixed;
        top: 10px;
        right: 10px;
        font-size: 24px;
        color: #333;
        }

    </style>
  <title>Excluir</title>
</head>

<body>
    <?php
    // Texto do botão
    $textoDoBotao1 = "Voltar";
    ?>
    <div class="titulo">
    <h1>Em Busca da Cidade Perdida</h1>
    </div>

    <div class="btn-container">
    <a href="listar.php" class="btn"><?php echo $textoDoBotao1; ?></a> <br>
   </div>
</body>
</html>