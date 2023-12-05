<?php
// Recebe o id do produto
$id = $_GET['id'];

// Conectar ao BD
include("conecta.php");

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
    <title>Editar</title>
</head>
<body>

    <h1> Editar História</h1>

    <form action="editar.php" method="POST">
        Informe o id da história:
        <input type="text" value="<?php echo $dados['id_historia'];?>" name="id"/> <br>
        Texto da história:
        <input type="text" value="<?php echo $dados['texto'];?>" name="texto"/> <br>
        URL da imagem:
        <input type="text" value="<?php echo $dados['imagem'];?>" name="imagem"/> <br> <br>
        <input type="submit" value="Editar"/>
    </form>
    
</body>
</html>