<?php
// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();
// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM historia";

// Executa o Select
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de historias</title>
</head>
<STYLE TYPE="text/css">
    BODY {
        background-color: #191b1f;
    }
</STYLE>

<body>
    <div class="titulo">
        <h1 font-size> Lista de historias</h1>
    </div>

    <table class="table table-striped">
        <tr>
            <thead>
                <th class="bg-dark text-white">Id da historia</th>
                <th class="bg-dark text-white">Descrição</th>
                <th class="bg-dark text-white">Imagem</th>
                <th class="bg-dark text-white" colspan=2>opções</th>
            </thead>
        </tr>
        <tr>
            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tbody>
                    <td> <?php echo $dados['id_historia'] ?></td>
                    <td> <?php echo $dados['descricao'] ?></td>
                    <td> <?php echo $dados['imagem'] ?></td>
                    <?php
                    echo '<td> <a href="editarhist.php?id=' . $dados['id_historia'] . '"> <img src="imagens/editar.png" width="20" height="20"> </a> </td>';
                    echo '<td> <a href="excluirhistoria.php?id=' . $dados['id_historia'] . '"> <img src="imagens/excluir.png" width="20" height="20"> </a> </td>'; ?>
                </tbody>
            <?php endwhile ?>
    </table>




</body>

</html>