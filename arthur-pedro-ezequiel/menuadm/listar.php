<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cenas</title>
    
</head>
<body>
Antes de excluir as cenas, é recomendavel que exclua suas escolhas e dialogos<br>
<h1> Lista de Cenas </h1><br>
<a href="menuadmin.php">Ir ao menu</a>
<?php
// Conectar ao BD
include("conecta.php");

// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM cena";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);


//Lista os itens
echo '<table border=1>
<tr>
<th>Id_cena</th>
<th>Audio</th>
<th>Imagem</th>
<th>Nome</th>
<th>Texto</th>
<th colspan=6>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['id_cena'].'</td>';
echo '<td>'.$dados['audio'] .'</td>';
echo '<td>'.$dados['imagem'].'</td>';
echo '<td>'.$dados['nome'] .'</td>';
echo '<td>'.$dados['texto'].'</td>';
echo '<td> <a href="formedit.php?id='.$dados['id_cena'].'"> editar </a> </td>';
echo '<td> <a href="excluir.php?id='.$dados['id_cena'].'"> excluir </a> </td>';
echo '<td> <a href="cadastrarescolha.php?id='.$dados['id_cena'].'"> Cadastrar escolhas para esta cena </a> </td>';
echo '<td> <a href="listarE.php?id='.$dados['id_cena'].'"> Listar escolhas desta cena </a> </td>';
echo '<td> <a href="caddialogo.php?id='.$dados['id_cena'].'"> Cadastrar dialogos para esta cena </a> </td>';
echo '<td> <a href="listardialogos.php?id='.$dados['id_cena'].'"> listar dialogos desta cena </a> </td>';
echo '</tr>';
}

echo '</table>';
?>

</body>

</html>
