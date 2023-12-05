<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Cidade Perdida</title>
    <style>
        @font-face {
            font-family: 'Moudy';
            src: url('fontes/ROXESTON.ttf') format('truetype');
            font-style: normal;
            font-weight: normal;
            }
        body{
            text-align:center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(imagens/catacumba.jpg);
            background-position: 0px -100px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
        a{ 
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border: 2px solid black;
        border-radius: 5px;
        color: black;
        background-color: transparent;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        }

        a:hover{
            background-color: black;
            color: #fff;
        } 
        .titulo{
            text-align: center;
            color: white;
            font-size: 25px;
            text-shadow: 0.1em 0.1em 0.2em black;
            font-family: Moudy, sans-serif;
        }   
    </style>

</head>

<body>

<div class=titulo> <h1> Menu </h1> </div>

    <form>
    <a href="formcad.html"> Cadastrar História </a> 
    <a href="listar.php"> Consultar História </a> 
    <a href="inicio.php"> Voltar </a>  


    </form>
</body>
</html>