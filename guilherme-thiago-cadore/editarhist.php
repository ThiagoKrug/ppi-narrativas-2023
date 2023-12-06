<?php
// Recebe o id do produto
$id = $_GET['id'];

// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();

// Seleciona os dados do produto da tabela lista
$sql = "SELECT * FROM historia WHERE id_historia=$id";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>

    <h1> Cadastrar Historia </h1>

    <form action="edithist.php" method="post">
        id
        <input type="number" value="<?php echo $dados['id_historia'];?>" name="idhist"> <br> <br>
        descricao
        <input type="text" value="<?php echo $dados['descricao'];?>" name="descricao"> <br> <br>
        imagem
        <input type="text" value="<?php echo $dados['imagem'];?>" name="imagem"> <br> <br>
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>