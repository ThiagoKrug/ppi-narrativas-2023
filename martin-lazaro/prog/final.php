<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container {
      position: relative;
      text-align: center;
    }

    html {
      height: 100%;
    }

    body {
      height: 100%;
      background-image: url(werewolf.jpg);
    }
    
    #perg {
      position: absolute;
      left: 8%;
      top: 13%;
      width: 95%;
      height: 100%;
      z-index: -1;
    }

    #hist {
      position: absolute;
      left: 22%;
      top: 20%;
      width: 60%;
      /* height: 60%; */
      /* z-index: -1; */
    }

    #opc {
      text-align: center;
      text-decoration: none;
    }


    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    a:active {
      text-decoration: underline;
    }

    #pers {
      position: absolute;
      left: 1%;
      top: 1%;
      height: 150px;
    }

    #perstxt {
      position: absolute;
      color: white;
      left: 0.8%;
      top: 15%;
      font-family: Arial, Helvetica, sans-serif;
      font-style: italic;
    }

    #but {
      border-radius: 10px;
      border: none;
      height: 40px;
      font-size: 20px;
      background-color: #a95e13;
    }

    #but:hover {
      background-color: pink;
    }

    #feit {
      position: absolute;
      left: 23%;
      top: 65%;
      height: 170px;
    }


    #typewriter {
       position: absolute; 
       left: 0%; 
      color: white; 
      font-family: "sans";
      font-size: 20px;
      margin: 10px 0 0 10px;
      white-space: nowrap; 
      width: 100%;
      overflow: hidden;
       width: 100em; 
       animation: type 4s steps(60, end); 
      }

    #typewriter:nth-child(2) {
      animation: type2 8s steps(60, end);
    }

    #typewriter a {
      color: white;
      text-decoration: none;
    }


    @keyframes type {
      from {
        width: 0;
      }
    }

    @keyframes type2 {
      0% {
        width: 0;
      }

      50% {
        width: 0;
      }

      100% {
        width: 100;
      }
    }

    @keyframes blink {
      to {
        opacity: .0;
      }
    }
  </style>
</head>


<?php

include("conecta.php");

$sql = "SELECT * FROM historia";

$resultado = mysqli_query($connect,$sql);

$dados = mysqli_fetch_assoc($resultado);

$rsq = "SELECT * FROM escolha";

$result = mysqli_query($connect,$rsq);

$dad = mysqli_fetch_assoc($result)

?>






<body>
  <div class="container">
  </div>
  <div id="hist">
    <p style="color: white; font-size: 25px;" id="typewriter"> <?php echo $dados['texto'] ?>
    </p> 
    <div id="opc">
    </div>
  </div>
  <audio autoplay>
    <source src="taberna.mp3" type="audio/ogg">
  </audio>
</body>

</html>