

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <style>
        
        
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(imagens/telainicio.jpg);
            background-position: 0px -100px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .login{
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%, -50%);
            padding: 60px;
            border-radius: 20px;
        }

        .alert{
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);;
            color: white;
            text-align: center;
            background-position: top;
            padding: 5px;
            border-radius: 20px;
            padding: 30px;
            
        }

        input{
         padding: 15px;
         border: none;
         outline: none;
         font-size: 15px;
         border-radius: 10px ;
        }

        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color:white;
        }

        .inputSubmit:hover{
            background-color: deepskyblue;
        }

        a{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color:white;
            text-decoration: none;    
        }

        a:hover{
            background-color: deepskyblue;
        }

        

    </style>
</head> 
<body>



    
        
<?php
if (isset($_GET['erro'])) {
$erro = $_GET['erro'];
if($erro==1)
{
    echo'<div class="alert alert-danger" role="alert"><h2>Usuário não encontrado!</h2><br> Usuário ou senha estão incorretos, tente novamente </div>';
}
}
?>
    <div class="login">
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
        <input type="text" name="user" placeholder="Usuario">
        <br> <br>
        <input type="password" name="senha" placeholder="Senha">
        <br> <br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        <a href="formulario.php">Cadastre-se</a>
        <br> <br>
        
        </form>
    </div>
</body>
</html>