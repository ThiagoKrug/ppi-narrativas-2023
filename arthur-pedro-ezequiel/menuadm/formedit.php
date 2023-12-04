<?php

$id = $_GET['id'];


include("conecta.php");

$sql = "SELECT * FROM cena WHERE id_cena=$id";


$resultado = mysqli_query($conexao,$sql);


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

    <form action="editar.php" method="post">
        Informe o id da cena:
        <input type="text" value="<?php echo $dados['id_cena'];?>" name="id"/> <br>
        Audio:<br>
        <input type="text" value="<?php echo $dados['audio'];?>" name="audio"/> <br>
        imagem:<br>
        <input type="text" value="<?php echo $dados['imagem'];?>" name="imagem"/> <br> <br>
        Nome:<bn>
        <input type="text" value="<?php echo $dados['nome'];?>" name="nome"/> <br> <br>
        Texto:<br>
        <textarea    name="texto" rows="5" cols="33"><?php echo $dados['texto'];?>
           </textarea>
<br> <br>
        <input type="submit" value="Editar"/>
    </form>
    
</body>
</html>