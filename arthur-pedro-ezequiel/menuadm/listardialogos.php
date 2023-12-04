<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cenas</title>
</head>
<body>

<h1> Lista de dialogos </h1><br>
<a href="menuadmin.php">Ir ao menu</a><br>
<a href="listar.php">Ir para a lista de cenas</a>

<?php
$id = $_GET['id'];

include("conecta.php");

$sql = "SELECT * FROM dialogos_textos where id_cena=$id ";


$resultado = mysqli_query($conexao,$sql);



echo '<table border=1>
<tr>
<th>Id cena</th>
<th>Id Dialogo</th>
<th>Texto</th>


<th colspan=2>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['id_cena'].'</td>';
echo '<td>'.$dados['id_dialogo'] .'</td>';
echo '<td>'.$dados['texto'].'</td>';

echo '<td> <a href="Editardig.php?id='.$dados['id_dialogo'].'"> editar </a> </td>';
echo '<td> <a href="exdig.php?id='.$dados['id_dialogo'].'"> excluir </a> </td>';
echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
