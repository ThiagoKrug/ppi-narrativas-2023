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
   
    <h1> Cadastrar dialogo </h1>

    <form action="cadasdig.php" method="get">
        
        Nome da cena: <?php echo $dados['nome'];?>
        <br>
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