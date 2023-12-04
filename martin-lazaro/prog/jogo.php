<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Document</title>

</head>


<?php

include("conecta.php");

$id = $_GET['id'];

$sql = "SELECT * FROM historia WHERE id_historia = $id";

$resultado = mysqli_query($connect, $sql);

$historia = mysqli_fetch_assoc($resultado);


?>





<body>
  <!--<img src="verlei.png" alt="verlei" height="110px" id="pers">
  <h3 id="perstxt">Pierre O amaldiçoado</h3><!-->
  <div id="hist">
    <div class="typewriter">
      <?php echo $historia['texto'] ?>
      <br> <br>
      <div id="opc">
        <?php

        $rsq = "SELECT * FROM escolha WHERE id_historia = $id";
        $result = mysqli_query($connect, $rsq);
        while ($escolha = mysqli_fetch_assoc($result)) {
          echo '<div class="botao"> <a href="jogo.php?id=' . $escolha['id_destino'] . '" id="but">' . $escolha['opcao'] . '</a></div><br><br> ';

        }
        ?>
      </div>
    </div>
  </div>
  <?php
  if ($historia['fim'] == 1) {
    echo "
        <audio autoplay>
        <source src='fim.mp3' type='audio/mpeg'>
        </audio>";
  } else {
    echo "
        <audio autoplay>
      <source src='taberna.mp3' type='audio/mpeg'>
      </audio>";
  }

  if ($historia['fim'] != 1) {
    echo '<a id="vi" href="index.php">Voltar ao inicio</a>';
  }



  ?>
</body>

</html>