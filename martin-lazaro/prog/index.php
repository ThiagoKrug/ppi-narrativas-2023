<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

        body {
            background-image: url(lobisomem.jpg);
            background-repeat: no-repeat;
            overflow: hidden;
            
        }

        #but{
            cursor: pointer;
    border: solid 1px white;
    position: absolute;
    top: 64%;
    left: 20%;
    height: 70px;
    width: 200px;
    border-radius: 20px;
    color: white;
    background-color: black;
    transition: background-color 0.5s ease, color 0.5s ease, transform 0.5s ease;
}

   #but:hover{
    background-color: #333;
    color: white;
    transform: scale(1.2)
}


  #name {
    font-family: 'arial';
    position: absolute;
    top: 13%;
    left: 2.5%;
    font-size: 120px;
    font: punk;
    color: white;

  }

    #but2{
        cursor: pointer;
        border: solid 1px white;
    position: absolute;
    top: 78%;
    left: 20%;
    height: 70px;
    width: 200px;
    border-radius: 20px;
    color: white;
    background-color: black;
    transition: background-color 0.5s ease, color 0.5s ease, transform 0.5s ease; 
    }

    #but2:hover{
    background-color: #333;
    color: white;
    transform: scale(1.2)
    }

  @font-face {
  font-family: 'arial';
  src: url(Minecraftia-Regular.ttf);
}
    </style>
        </div>
    </form>
    <a href="jogo.php?id=1"><button id="but">I N I C I A R</button></a>
    <a href="sinopse.php"><button id="but2">SYNOPSIS</button></a>
    
    <h1 id="name">DON'T ESCAPE</h1>
</body>
</html>