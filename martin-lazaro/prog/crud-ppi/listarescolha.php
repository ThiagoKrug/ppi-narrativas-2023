<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
<h1> ESCOLHAS </h1>

<?php

$id = $_GET["id"];

//Conectar ao BD
include("../conecta.php");

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM escolha WHERE id_historia=$id";

//Executa o select
$resultado = mysqli_query($connect,$sql);

//lista os itens
echo '<table border=1>
<tr>
  <th>ID</th>
  <th>texto</th>
  <th>Opção</th>
  <th colspan=3>Opção</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    echo '<td>'.$dados['id_escolha'].'</td>';
    echo '<td>'.$dados['opcao'].'</td>';

    echo '<td><a href="formeditescolha?id='.$dados['id_escolha'].'&">Editar</a></td>';
    echo '<td><a href="deleteescolha?id='.$dados['id_escolha'].'">Excluir</a></td>';
    echo '</tr>';
}

echo '</table>';

?>
<a href="index.php">Listar histórias</a>
</body>
</html>