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
        left: 38%;
        top: 90%;
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

        #but {
  border-radius: 10px;
  border: none;
  height: 60px;
  font-size: 24px;
  color: white;
  background-color: darkslategrey;
}

#but:hover {
  background-color: rgb(43, 43, 43);
  text-decoration: none;
}

        #feit {
        position: absolute;
        left: 22%;
        top: 20%;
        height: 170px;
        }


    #typewriter{
    position: absolute;
    left: 19%;
    color: line; 
    font-size: 15px;
    margin: 10px 0 0 10px;
    white-space: nowrap;
    overflow: hidden;
    width: 40em;
    animation: type 4s steps(60, end);
    font-family: 'arial'; 
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
   left: 23%;
   top: 20%;
   width: 55%;
   height: 65%;
}

    </style>
</head>
<body>
 <div class="container">
    </div>
    <div class="hist">
    <p style="color: white; font-size: 35px;" id="typewriter"> Essa será a minha jogada
</p>
    <img src="].gif" alt="tedy" id="card">
                <div id="opc2">
                <a href='jogo.php?id=17'><button id="but"> Continuar</button></a> <br> <br>
                </div>
    </div>
    <audio autoplay>
    <source src="taberna.mp3" type="audio/ogg">
    </audio>
    <div> <img src="feiticeiro.png" alt="moreira" id="feit"> </div>
</body>
</html>









