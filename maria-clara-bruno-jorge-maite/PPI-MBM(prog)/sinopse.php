<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Cidade Perdida </title>
    <style>
        body{
  width: 50%;
  margin: auto;
  margin-top: 0px;
 background-image: url(imagens/fundo.jpg);
background-position: 0px -100px;
background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
}

@font-face{
        font-family: 'Moudy';
        src: url('fontes/Dunkin.otf') format('OpenType');
        font-style: normal;
        font-weight: normal;
        }



@font-face {
    font-family: 'Marinero';
    src: url('fontes/ValeriaBoldGrunge.ttf') format('truetype');
    font-style: normal;
    font-weight: normal;
  }

.introducao{
    color: black;
    justify-content: center;
    font-size: 150%;
    text-align: center;
    font-family: 'Marinero';
}

p{
  color: black;
text-align: center;
font-family: 'Moudy';
font-size: 90%;
background-color: rgba(255, 255, 255, 0.8);
padding: 25px;
border-radius: 20px;   
  
}
a{
    display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border: 2px solid black;
        border-radius: 5px;
        color: black;
        background-color: transparent;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        font-family: 'Arial';
    }
    a:hover{
        background-color: black;
        color: #fff;
    }


    </style>
</head>

<body>
<?php
    // Texto que você deseja exibir no botão
    $textoDoBotao = "Continuar";
    
    ?>
    </body>
</html>
    <div class="introducao"> 
<h1> Em Busca da Cidade Perdida </h1>
</div>

<?php
// Conectar ao BD
$id = $_GET['id'];
include("conecta.php");

// Seleciona todos os dados da tabela lista
$sql = "SELECT * FROM historia WHERE id_historia=$id";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);
while ($dados = mysqli_fetch_assoc($resultado)){   
    echo '<p>'.$dados['texto'].'</p>';
}

$sql2 = "SELECT * FROM escolha WHERE id_historia=$id";
$resultad = mysqli_query($conexao,$sql2);
echo "<br>";
while ($dado = mysqli_fetch_assoc($resultad)){ 
   if($id == 61){
    echo'<a href="inicio.php"> Voltar </a>';
   }
   
    ?>   

<a  href="sinopse.php?id=<?php echo $dado['id_consequencia']; ?>"> <?php echo $dado['escolha']; ?> <br>


<?php 
};
?>

</body>
</html>