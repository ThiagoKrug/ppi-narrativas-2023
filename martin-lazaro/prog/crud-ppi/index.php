<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
     
<h1> CRUD </h1>
<h3> Para excluir uma história você precisa excluir as escolhas primeiro </h3>
<a href="formcadhistoria.php">Cadastrar história</a><br><BR>
<?php

//Conectar ao BD
include("../conecta.php");

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM historia";

//Executa o select
$resultado = mysqli_query($connect,$sql);

//lista os itens
echo '<table border=1>
<tr>
  <th>ID</th>
  <th>texto</th>
  <th colspan=4>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    echo '<td>'.$dados['id_historia'].'</td>';
    echo '<td>'.$dados['texto'].'</td>';

    echo '<td><a href="formedit?id='.$dados['id_historia'].'&">Editar</a></td>';
    echo '<td><a href="deletehistoria?id='.$dados['id_historia'].'">Excluir</a></td>';
    echo '<td><a href="listarescolha?id='.$dados['id_historia'].'">Listar escolhas</a></td>';
    echo '<td><a href="formcadescolha?id='.$dados['id_historia'].'">Cadastrar escolhas</a></td>';
    echo '</tr>';
}

echo '</table>';

?>
</body>
</html>