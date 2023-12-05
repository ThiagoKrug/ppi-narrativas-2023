 <?php
    $idhistoria = $_GET['id_historia'];
    //$img =  $_GET['imagem'];
    // $idhistoria = 1;
    require_once "conexao.php";
    $conexao = conectar();
    $sql1 = "select * from historia where id_historia =$idhistoria";
    $resultado1 = mysqli_query($conexao, $sql1);
    $historia = mysqli_fetch_assoc($resultado1);
    $sql2 = "select * from escolha where id_origem = $idhistoria";
    $resultado2 = mysqli_query($conexao, $sql2);
    $escolhas = mysqli_fetch_all($resultado2, MYSQLI_ASSOC);
    $img =  $historia['imagem'];
    ?>
 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
     <link rel="stylesheet" href="stylejogo.css">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>historia</title>

     <STYLE TYPE="text/css">
         BODY {
             background-image: url(imagens/fundo.png);
         }
     </STYLE>
 </head>

 <body>
     <div class="img">
         <img src="imagens/<?php echo $img; ?>" width="750" height="380">
     </div>
     <div id="corpao">
         <div class="texto">

             <h class="descricao"><?php
                                    echo $historia['descricao'];
                                    ?> </h>
             <script>
                 function typeWrite(elemento) {
                     const textoArray = elemento.innerHTML.split('');
                     elemento.innerHTML = ' ';
                     textoArray.forEach(function(letra, i) {

                         setTimeout(function() {
                             elemento.innerHTML += letra;
                         }, 50 * i)

                     });
                 }
                 const titulo = document.querySelector('.descricao');
                 typeWrite(titulo);
             </script>

         </div>

         <div class="escolhas">
             <?php
                foreach ($escolhas as $escolha) {
                    //var_dump($escolha);
                    echo "<br><div class=botao><button><a href ='jogo.php?id_historia=" . $escolha['id_destino']  . "'>" .   $escolha['descricao_alt'] . "</a></button></div>";
                }
                ?>
         </div>
     </div>

 </body>


 </html>