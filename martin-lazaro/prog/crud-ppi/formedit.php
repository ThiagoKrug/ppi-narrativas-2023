<?php

//REceber o id da escolha
$id = $_GET['id'];

//Conectar ao BD
include("../conecta.php");

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM historia WHERE id_historia=$id";

//Executa o select
$resultado = mysqli_query($connect,$sql);

//Gera o vetor com os dados buscados
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
    
<h1> Editar </h1>

<form action="updatehistoria.php" method="post">
    Informe o id da historia:
    <input type="text" value="<?php echo $dados['id_historia'];?>" name="id"/> <br>
    texto da historia:<br>
    <textarea id="story" name="texto" rows="5" cols="33"><?php echo $dados['texto'];?></textarea><br>   
    <input type="submit" value="Editar"/>
</form>

</body>
</html>