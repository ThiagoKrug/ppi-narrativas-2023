<?php
session_start();
if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha'])==true)){
   unset($_SESSION['user']);
   unset($_SESSION['senha']);
   header('Location: login.php');
}
$logado = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <style>
    @font-face {
        font-family: 'Valeria';
        src: url('fontes/ValeriaBoldGrunge.ttf') format('truetype');
        font-style: normal;
        font-weight: normal;
      }

      @font-face{
        font-family: 'Typwrng';
        src: url('fontes/Tornado Serif Font - Demo.otf');
        font-style: normal;
        font-weight: normal;
      }

      @font-face{
        font-family: 'ROXESTON';
        src: url('fontes/ROXESTON.ttf') format('truetype');
        font-style: normal;
        font-weight: normal;
      }
     

     body{
        background-image: url(imagens/telainicio.jpg);
        background-position: 0px -100px;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
     }
     
      .titulo{
         color: white;
         justify-content: center;
         font-size: 150%;
         text-align: center;
         font-family: 'Valeria';
         text-shadow: 0.1em 0.1em 0.2em black;
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
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border: 2px solid white;
        border-radius: 5px;
        color: white;
        background-color: transparent;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        font-family: 'Arial';
     
    }
    .btn:hover{
      background-color: black;
      color: #fff;
        
    }
    .socore-container{
      position: fixed;
      top: 10px;
      right: 10px;
      font-size: 24px;
      color: #333;
    }

    h2{
      color:white;
    }

    .subtitulo{
      text-align: center;
      font-size: 100%;
      text-shadow: 0.1em 0.1em 0.2em black;
      font-family: 'ROXESTON';

    }

    .txtlogin{
      position: absolute;
      top: 90%;
      text-align: center;
      left: 12%;
      font-family: 'Typwrng';
      text-shadow: 0.1em 0.1em 0.2em black;
    }

    img{
        max-width:9%;
        max-height:4%;
        display: inline;
        position: relative;
        }

    </style>
  <audio autoplay>
  <source src="aventura.mp3" type="audio/mpeg">
  Seu navegador não suporta o elemento de áudio.
</audio>

    <title>Jogo Interativo</title>
</head>

<body>
       
    <?php
    // Texto que você deseja exibir nos botões
    $textoDoBotao1 = "Jogar";
    $textoDoBotao2 = "Sinopse";
    $textoDoBotao3 = "Editar";
    $textoDoBotao4 = "Sair agora";
    ?>
     
    <h1><div class="titulo">Em Busca da Cidade Perdida</div></h1>
    
    <h2> <div class="subtitulo">Desvende se for capaz!</div></h2>
   

    <?php
    echo"<h2><div class='txtlogin'>Bem vindo(a) <u>$logado</u>, ajude Alex nos segredos da cidade perdida!</div></h2>";
    ?>
    

    <div class="btn-container">
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger"><?php echo $textoDoBotao4;?></a><br>
      </div> 
    <br><a href="jogo.php?id=1" class="btn"><?php echo $textoDoBotao1; ?></a> <br>
     <a href="sinopse.php?id=61" class="btn"><?php echo $textoDoBotao2; ?></a> <br>
     <a href="crud.php" class="btn"><?php echo $textoDoBotao3; ?></a><br>
    </div>

    
   <a href="inicioingles.php" ><?php echo "<img src='imagens/eua.png'/>"?></a>


</body>
</html>