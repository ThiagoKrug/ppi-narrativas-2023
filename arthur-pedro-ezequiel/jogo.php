<?php
$id=$_GET['id'];
include("conecta.php");
$sql = "SELECT * FROM cena where id_cena=$id";
$sql1="SELECT * FROM escolha where id_cena=$id";
$sql2="SELECT * FROM dialogos_textos where id_cena=$id";
$resultado2 = mysqli_query($conexao,$sql2);
$resultado1 = mysqli_query($conexao,$sql1);
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">


<head>
<audio autoplay loop>
  <source  src="<?php if($id == 97 or $id == 61 or $id==95 or $id==58 or $id==84){echo $dados['audio'];} if($id==49 or $id==46 or $id==48 or $id==54 or $id==63) {echo '';}
   else {
    echo 'audios/floresta';
  };?>" >
</audio>
<audio autoplay >
  <source  src="<?php echo $dados['audio'];?>" >
</audio>
    <style>
      button{
        border-radius:20px;
      }
        .ima {
  border: 15px solid #ddd;
  border-radius: 20px;
  height: 30%;
  display: block;
border-color:black;
  width: 30%;
  margin-left: auto;
  margin-right: auto;

}


.caixa {
   background-color:white;
  width: 42%; 
  padding: 20px;
  margin-left: auto;
  margin-right: auto;
  border-color:  #010101;
  align-items:center;
   border: 5px solid dark-gray;
  border-radius: 25px;
  font-family:Fantasy ;
}


  .esco{
  text-align:center;
  
  }
  button{
    padding: 15px 32px;
    font-size:20px;
    width: 43%;
  }
  body{
    background-image: url('imagens/backgrau'); 
    background-size: 100% 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
    font-family: 'Inter', sans-serif;
    margin: ;
    padding: 0;
    color: black;
    border-radius: 25px;
  }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
     

   
 <img src="<?php echo $dados['imagem'];?>" width="800px" class="ima">  <br>
   <div class="caixa">
 <?php
while ($dados2 = mysqli_fetch_assoc($resultado2)) {
        
    echo '<p> '.$dados2['texto'].' </p> ';
    }
    ?>
    
  </div>

</body>
<h1>
    <div class="esco"><?php
while ($dados1 = mysqli_fetch_assoc($resultado1)) {
        
    echo '<td> <a href="jogo.php?id='.$dados1['id_destino'].'"> <button>'.$dados1['texto'].'</button> </a> </td>';
    echo '  <br>  ';}
    ?>
     <a href='index.html' > <img src='imagens/casinha' width="50px"> </a></div>
    
</h1>

</html>