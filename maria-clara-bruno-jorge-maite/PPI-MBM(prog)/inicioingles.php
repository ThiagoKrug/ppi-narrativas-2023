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
      left: 17%;
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
    $textoDoBotao1 = "To Play";
    $textoDoBotao2 = "Synopsis";
    $textoDoBotao4 = "To go out";
    ?>
     
    <h1><div class="titulo">In Search of the Lost City</div></h1>
    
    <h2> <div class="subtitulo">Uncover if you can!</div></h2>
   

    <?php
    echo"<h2><div class='txtlogin'>Welcome <u>$logado</u>, help Alex in the secrets of the lost city!</div></h2>";
    ?>
    

    <div class="btn-container">
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger"><?php echo $textoDoBotao4;?></a><br>
      </div> 
    <br><a href="jogoingles.php?id=75" class="btn"><?php echo $textoDoBotao1; ?></a> <br>
     <a href="sinopse.php?id=62" class="btn"><?php echo $textoDoBotao2; ?></a> <br>
    </div>

    <a href="inicio.php" ><?php echo "<img src='imagens/bra.png'/>"?></a>

</body>
</html>

