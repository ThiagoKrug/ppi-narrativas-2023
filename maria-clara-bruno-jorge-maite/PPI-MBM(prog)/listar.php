<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consultar História </title>
   <style>
    .texto{
      text-align: center;
    }
    .tabela{
    width: 75%;
    margin: auto;
    margin-top: 0px;
    }
    body{
        background-color: #D3D3D3;
    }
    </style>
</head>

<body>

<div class=texto> <h1> Consultar História </h1> </div>

<?php
// Conectar ao BD
include("conecta.php");

// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM historia";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);


//Lista os itens
echo '<div class= tabela> <table border=1>
<tr>
<th>Id</th>
<th>Texto</th>
<th>Imagem</th>
<th colspan=2>Opções</th>
</div></tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['id_historia'].'</td>';
echo '<td>'.$dados['texto'] .'</td>';
echo '<td>'.$dados['imagem'].'</td>';
echo '<td> <a href="formedit.php?id='.$dados['id_historia'].'"> <img src="imagens/editar.png" width="20" height="20"> </a> </td>';
echo '<td> <a href="excluir.php?id='.$dados['id_historia'].'"> <img src="imagens/excluir.png" width="20" height="20"> </a> </td>';
echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
