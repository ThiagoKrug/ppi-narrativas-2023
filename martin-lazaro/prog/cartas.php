<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .container {
            position: relative;
            text-align: center;
        }
        body {
            background-image: url(fundop.png);
        }

        #perg{
        position: absolute;
        left: 12%;
        top: 13%;
        width: 80%;
        height: 78%;
        z-index: -1;
        }

        #hist{
        position: absolute;
        left: 22%;
        top: 20%;
        width: 60%;
        height: 60%;
        z-index: -1;
        background-color: black;
        }

        a:hover {
        color: red;
        background-image: url(wall.jpg);
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


        #opc2 {
        position: absolute;
        left: 3%;
        top: 100%;
        width: 70%;
        height: 70%;
        z-index: -1;
        text-decoration: none;
        }

        #pers {
        position: absolute;
        left: 1%;
        top: 1%;
        height: 150px;
        }

        #perstxt {
        position: absolute;
        left: 0.8%;
        top: 15%;
        font-family: Arial, Helvetica, sans-serif;
        font-style:italic;
        }

      
        #feit {
        position: absolute;
        left: 22%;
        top: 20%;
        height: 170px;
        }


    #typewriter{
      font-family: arial;
      position: absolute;
      left: 19%;
  color: line; 
  font-size: 20px;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 40em;
  animation: type 4s steps(60, end); 
}

@font-face {
  font-family: 'arial';
  src: url(Minecraftia-Regular.ttf);
}

#typewriter:nth-child(2){
  animation: type2 8s steps(60, end);
}

#typewriter a{
  color: lime;
  text-decoration: none;
}


@keyframes type{ 
  from { width: 0; } 
} 

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink{
  to{opacity: .0;}
}

#card {
   position: absolute;
   left: 28%;
   top: 20%;
   height: 300px;
}


#but2 {
  border-radius: 10px;
  border: none;
  height: 60px;
  font-size: 24px;
  color: white;
  background-color: darkslategrey;
}

#but2:hover {
  background-color: rgb(43, 43, 43);
  text-decoration: none;
}
    </style>
</head>
<body>
    <div class="hist">
    <p style="color: white; font-size: 35px;" id="typewriter"> O que devo jogar? </p>
    <img src="cartas.png" alt="tedy" id="card">
                <div id="opc2">
                <a href='cutscene.php'><button id="but2"> Continuar</button></a> <br> <br>
                </div>
    </div>
    <audio autoplay>
    <source src="taberna.mp3" type="audio/ogg">
    </audio>
    <div> <img src="feiticeiro.png" alt="moreira" id="feit"> </div>
</body>
</html>









