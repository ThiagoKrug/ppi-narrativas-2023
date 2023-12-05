<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_login.css">
        <title>Login</title>
    </head>
    <body>
        <div class="container" >
            <a class="links" id="paracadastro"></a>
            <a class="links" id="paralogin"></a>
             
            <div class="content">
                <!-- formulario de login-->
        <div id="login">
            <form class="card" action="login.php" method="POST">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Digite seu usuário" required oninvalid="this.setCustomValidity('Digite seu usuário')" oninput="setCustomValidity('')">
                    </div>
                    <div class="card-content-area">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha"  required oninvalid="this.setCustomValidity('Digite sua senha')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div id="erro_login">Usuário ou senha Incorretos!</div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                <div class="card-footer">
                    <input type="submit" value="Login" class="submit"><br>
                </div>
                <div id="link_cadastro">Não tem uma conta?<a href="#paracadastro">Clique aqui</a></div>
            </form>
            </div>
            <!-- formulario de cadastro -->
        <div id="cadastro">
            <form class="card" method="post" action="cadastrar.php">
                <div class="card-header">
                    <h2>Cadastro</h2>
                </div>
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Digite seu usuário" autofocus="" required oninvalid="this.setCustomValidity('Digite seu usuário')" oninput="setCustomValidity('')">
                    </div>
                    <div class="card-content-area">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha"  required oninvalid="this.setCustomValidity('Digite sua senha')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Cadastre-se" class="submit"><br>
                </div>
                <div id="link_cadastro">Já tem uma conta?<a href="#paralogin">Clique aqui</a></div>
                </form>
        </div>
        </div>
        </div>
    </body>
</html>