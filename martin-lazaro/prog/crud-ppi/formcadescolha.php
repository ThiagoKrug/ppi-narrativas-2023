<?php

$id = $_GET['id'];



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
     <h2> Cadastrar escolha </h2>

      <form action="cadastrarescolha.php" method="get">
          texto da escolha:<input type="text" name="opcao">
           <br>
           Informar id do destino:<input type="text" name="id_destino">
           <br>
           Informar id da historia:<input type="text" name="id" value="<?php echo $id; ?>">
          <input type="submit" value="Cadastrar">
      </form>

</body>
</html>