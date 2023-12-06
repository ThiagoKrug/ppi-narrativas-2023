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

$sql = "SELECT * FROM historia WHERE id_historia = 55";

$resultado = mysqli_query($connect,$sql);

$historia = mysqli_fetch_assoc($resultado);


?>






<body>
  <div class="container">
  </div>
  <!--<img src="verlei.png" alt="verlei" height="110px" id="pers">
  <h3 id="perstxt">Pierre O amaldiçoado</h3><!-->
  <div id="hist">
   <div class="typewriter"> <?php echo $historia['texto'] ?> </div>
  </div> 
        <audio autoplay>
        <source src="fim.mp3" type="audio/ogg">
        </audio>
        <audio autoplay>
      <source src="taberna.mp3" type="audio/ogg">
      </audio> 
</body>

</html>