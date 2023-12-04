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
    <title>Document</title>
</head>
<body>
    O id de destino é para que cena a escolha ira direcionar, já o id da cena é a cena que a escolha pertence
    <h1> Cadastrar escolha </h1>

    <form action="cadastrarE.php" method="get">
        
        Nome da cena: <?php echo $dados['nome'];?>
        <br>
        Id de da cena de destino:
        <input type="text" name="destino"> <br>
        Id da cena:
        <input type="text" value="<?php echo $dados['id_cena'];?>" name="id"/> <br>
        Texto: <br>
 <textarea  name="texto" rows="5" cols="33">
           </textarea>
           <br>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>