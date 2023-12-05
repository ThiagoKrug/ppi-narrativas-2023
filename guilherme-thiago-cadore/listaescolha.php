<?php
// Conectar ao BD
require_once "conexao.php";
$conexao = conectar();
// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM escolha";

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
    <title>Lista de escolhas</title>
</head>
<STYLE TYPE="text/css">
    BODY {
        background-color: #212529;
    }
</STYLE>

<body>
    <div class="titulo">
        <h1> Lista de escolhas </h1>
    </div>

    <table class="table  ">
        <tr>
            <thead>
                <th class="bg-dark text-white">id de origem</th>
                <th class="bg-dark text-white">id de destino</th>
                <th class="bg-dark text-white">descrição</th>
                <th class="bg-dark text-white" colspan=2>opções</th>
            </thead>
        </tr>
        <tr>
            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tbody>
                    <td> <?php echo $dados['id_origem'] ?></td>
                    <td> <?php echo $dados['id_destino'] ?></td>
                    <td> <?php echo $dados['descricao_alt'] ?></td>
                    <?php
                    echo '<td> <a href="editarescolha.php?id=' . $dados['id_escolha'] . '"> <img src="imagens/editar.png" width="20" height="20"> </a> </td>';
                    echo '<td> <a href="excluirescolha.php?id=' . $dados['id_escolha'] . '"> <img src="imagens/excluir.png" width="20" height="20"> </a> </td>'; ?>
                </tbody>
            <?php endwhile ?>
    </table>




</body>

</html>