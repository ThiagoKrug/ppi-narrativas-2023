<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://www.fontspace.com/ancient-modern-tales-font-f28700">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>titulo</title>
</head>

<body>

  <div class="titulo">
    <h1>Biblioteca De Alexandria</h1>
  </div>

  <a class="box">
  </a>

  <div class="conteiner">
    <div id="corpao">
      <div class="desc">
        <h1 class="texto">Você está na pele de Marcelino, um estudioso que se encontra no meio do caos do ataque de Julio Cesar na cidade de Alexandria.</h1>

      </div class="link">
      <div class="invisivel" id="botao">
        <a href="jogo.php?id_historia=1">jogar</a>
      </div>
    </div>
  </div>
  </div>
  </div>
          <script>
            function typeWrite(elemento) {
              const textoArray = elemento.innerHTML.split('');
              elemento.innerHTML = ' ';
              textoArray.forEach(function(letra, i) {

                setTimeout(function() {
                  elemento.innerHTML += letra;
                }, 50 * i)

              });
              setTimeout(function() {
                visibility();
              }, 50 * (textoArray.length + 10));
            }
            const titulo = document.querySelector('.texto');
            typeWrite(titulo);
            
            function visibility(){
              document.getElementById("botao").style.visibility = "visible";
            }
            
          </script>
</body>

</html>