<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Cidade Perdida </title>

    <?php

$id = $_GET['id'];
include("conecta.php");
// Verificar se o ID é igual a 19
if ($id == 133) {
    echo '<audio autoplay>
  <source src="alarme.mp3" type="audio/mpeg">
  Seu navegador não suporta o elemento de áudio.
</audio>';
}
?>

    <style>

    
        body{
        width: 50%;
        margin: auto;
        margin-top: 0px;
        background-image: url(imagens/fundo.jpg);
        background-position: 0px -100px;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }

        @font-face{
        font-family: 'Moudy';
        src: url('fontes/Dunkin.otf') format('OpenType');
        font-style: normal;
        font-weight: normal;
        }

        @font-face {
        font-family: 'Marinero';
        src: url('fontes/ValeriaBoldGrunge.ttf') format('truetype');
        font-style: normal;
        font-weight: normal;
        }

        .introducao{
        color: black;
        justify-content: center;
        font-size: 150%;
        text-align: center;
        font-family: 'Marinero';
        text-shadow: 0.1em 0.1em 0.2em black;
        }

        p{
        color: black;
        text-align: center;
        font-family: 'Moudy';
        font-size: 75%;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 25px;
        border-radius: 20px;   
        }

        a{
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border: 2px solid black;
        border-radius: 5px;
        color: black;
        background-color: transparent;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        font-family: 'Arial';
        }

        a:hover{
        background-color: black;
        color: #fff;
        }
        

        img{
        max-width:55%;
        max-height:50%;
        display: inline;
        position: relative;
        left: 25%;
        }

        
            
    </style>
    </head>

    <body>


    <div class="fundo">

    <?php
    // Texto que você deseja exibir no botão
    $textoDoBotao = "Continuar";
    
    ?>
    </body>


    <div class="introducao"> 
    <h1> In Search of the Lost City </h1>
    </div>


<?php

$id = $_GET['id'];
include("conecta.php");

// Verificar se o ID é igual a 19
if ($id == 121) {
    // Continuar com o código original
    $sql = "SELECT * FROM historia WHERE id_historia=$id";
    $resultado = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($resultado)) {
        echo '<img src="'.$dados['imagem'].'">';
        echo '<p>'.$dados['texto'].'</p>';
    }
      // Incluir o código HTML/PHP do segundo exemplo
      include("senhatikal.php");


    $sql2 = "SELECT * FROM escolha WHERE id_historia=$id";
    $resultad = mysqli_query($conexao, $sql2);
    echo "<br>";

    while ($dado = mysqli_fetch_assoc($resultad)) { ?>   
        <a href="jogoingles.php?id=<?php echo $dado['id_consequencia']; ?>">
            <?php echo $dado['escolha']; ?> 
        </a>
    <?php 
    }
}

else{
    $sql = "SELECT * FROM historia WHERE id_historia=$id";
    $resultado = mysqli_query($conexao, $sql);

    while ($dados = mysqli_fetch_assoc($resultado)) {
        echo '<img src="'.$dados['imagem'].'">';
        echo '<p>'.$dados['texto'].'</p>';
    }


    $sql2 = "SELECT * FROM escolha WHERE id_historia=$id";
    $resultad = mysqli_query($conexao, $sql2);
    echo "<br>";

    while ($dado = mysqli_fetch_assoc($resultad)) { ?>   
        <a href="jogoingles.php?id=<?php echo $dado['id_consequencia']; ?>">
            <?php echo $dado['escolha']; ?> 
        </a>
    <?php 
    }
    if($id==75){
        echo'<a href="inicioingles.php"> Back </a>';
    }
    


    if($id== 135){
        echo '<a href="inicioingles.php"> Back </a>';
    }
}

?>


</body>
</html>