<?php

if(isset($_POST['submit'])){

    include("conecta.php");

    $nome = $_POST['nome'];
    $usuario = $_POST['user'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO `usuario`(`nome`, `usuario`, `email`, `senha`) VALUES ('$nome','$usuario','$email','$senha')";
    $resultado = mysqli_query($conexao, $sql);
    echo "<h1> Cadastro feito com sucesso!</h1>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
          font-family: Arial, Helvetica, sans-serif;
          background-image: linear-gradient(to right,rgb(20, 147,220), rgb(17, 54, 71) );
        }

        .box{
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 12px;
            width: 20%;
        }

        fieldset{
            border: 3px solid black;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue ;
            border-radius: 9px;
            color: white;
        }

        .input-box{
           position: relative;
        }
        
        .inputUser{
           background: none; 
           border: none;
           border-bottom: 3px solid dodgerblue;
           outline: none;
           color: black;
           font-size: 15px;
           width: 100%;
        }

        .labelInput{
           position: absolute;
           top:0px;
           left: 0px;
           pointer-events: none;
           transition: .5s;
        }

        .inputUser:focus ~ .labelInput, .inputUser:valid ~.labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220) );
            width: 100%;
            border: none;
            padding: 15px;
            color:white;
            font-size: 15px;
            border-radius: 15px;
        }

        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
        }


    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend> <b>Formulário de Cadastro</b> </legend>
                <br>
                <div class="input-box">
                   <input type="text" name="nome" id="nome"class="inputUser" required> 
                   <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="text" name="user" id="nome"class="inputUser" required> 
                    <label for="nome" class="labelInput">Nome de Usuário</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="email" name="email" id="email"class="inputUser" required> 
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="password" name="senha" id="senha"class="inputUser" required> 
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>

                <input type="submit" name="submit" id="submit">
                

            </fieldset>
            
        </form>
    </div>
    <a href="login.php" id="submit">Voltar</a>

</body>
</html>