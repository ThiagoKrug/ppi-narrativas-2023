<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Completo!</title>
    <link rel="stylesheet" href="style_cad.css">
</head>
<body>
<?php

// CADASTRANDO NO BD
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
include("conecta.php");

// Verificar se o usuário já existe no banco de dados
$verificaUsuario = "SELECT * FROM usuario WHERE usuario = '$usuario'";
$resultado = mysqli_query($conexao, $verificaUsuario);

if (mysqli_num_rows($resultado) > 0) {
    echo '<div id="conteudo">';
        echo '<div id="cont1">';
        echo 'Este Usuario já existe!';
echo '</div>';
echo '<div id="voltar">';
echo '<a href="index.php#paralogin"><button class="voltar">Voltar</button></a>';
echo '</div>';
echo '</div>';
} else {
    // Usuário não existe, realizar o cadastro
    $sql = "INSERT INTO usuario(usuario, senha) VALUES ('$usuario','$senha')";
    if (mysqli_query($conexao, $sql)) {
        // Cadastro realizado com sucesso
        echo '<div id="conteudo">';
        echo '<div id="cont1">';
        echo 'Cadastro Feito com sucesso!';
echo '</div>';
echo '<div id="voltar">';
echo '<a href="index.php#paralogin"><button class="voltar">Voltar</button></a>';
echo '</div>';
echo '</div>';
    } else {
        // Erro no cadastro
        echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
    }
}
?>
</body>
</html>