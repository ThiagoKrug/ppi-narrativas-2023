<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

</head>
<body>
<STYLE TYPE="text/css">
    BODY {
        background-image: url(imagens/fundo.png);
    }
</STYLE>
<div class="titulo"><h1>Login</h1></div>
    <div class="conteiner">
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar"> <br>
        </form>
        <h>Não tem conta?<a href="cadastro.html">Clique aqui</a></h>
    </div>
</body>
</html>