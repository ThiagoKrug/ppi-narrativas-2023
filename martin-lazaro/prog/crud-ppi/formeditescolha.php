<?php

//REceber o id da escolha
$id = $_GET['id'];

//Conectar ao BD
include("../conecta.php");

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM escolha WHERE id_escolha=$id";

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

<form action="updateescolha.php" method="post">
    Informe o id da escolha:
    <input type="text" value="<?php echo $dados['id_escolha'];?>" name="id"/> <br>
    texto da escolha:
    <input type="text" value="<?php echo $dados['opcao'];?>" name="opcao"/> <br>
    <input type="submit" value="Editar"/>
</form>

</body>
</html>