<?php

$id = $_GET['id'];


include("conecta.php");

$sql = "SELECT * FROM dialogos_textos WHERE id_dialogo=$id";


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

    <form action="Editd.php" method="post">
        Id da cena:
        <?php echo $dados['id_cena'];?> <br>
        <input type="hidden" value="<?php echo $dados['id_cena'];?>" name="id_cena"/> <br>
        id Dialogo:<?php echo $dados['id_dialogo'];?> <br><br>
        <input type="hidden" value="<?php echo $dados['id_dialogo'];?>" name="id_dialogo"/> <br>

        Texto:<br>
        <textarea    name="texto" rows="5" cols="33"><?php echo $dados['texto'];?>
           </textarea>
<br> <br>
        <input type="submit" value="Editar"/>
    </form>
    
</body>