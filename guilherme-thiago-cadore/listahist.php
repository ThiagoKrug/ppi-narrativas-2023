<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras</title>
</head>
<body>

<h1> Lista de Historias </h1>

<?php
// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();
// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM historia";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);


//Lista os itens
echo '<table border=1>
<tr>
<th>Id</th>
<th>Descrição</th>
<th>Imagem</th>
<th colspan=2>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['id_historia'].'</td>';
echo '<td>'.$dados['descricao'] .'</td>';
echo '<td>'.$dados['imagem'].'</td>';
echo '<td> <a href="editarhist.php?id='.$dados['id_historia'].'"> <img src="imagens/editar.png" width="20" height="20"> </a> </td>';
echo '<td> <a href="excluirhist.php?id='.$dados['id_historia'].'"> <img src="imagens/excluir.png" width="20" height="20"> </a> </td>';
echo '</tr>';
}

echo '</table>';
?>

</body>
</html>