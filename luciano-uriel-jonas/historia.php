<?php
include('verifica_login.php');
include("conecta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <link rel="stylesheet" href="style_historia1.css">
    
</head>
<body>
<div class="cena">
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

if(empty($_GET['id'])) {
  header('Location: historia?id=1');
  exit();
}
if (isset($_GET["id"])){
$id = $_GET['id'];
if ($id==1) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=1";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=1";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=1";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=2"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=2";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=7"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==2) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=2";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=2";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=3"><button id="continuar">Continuar.</button></a>';


  echo '</div>';
}
if ($id==3) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=3";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=3";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=4"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==4) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=4";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=4";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=3";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=5"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=4";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=6"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==5) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=5";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=5";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=6"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==6) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=6";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=6";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=15"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==7) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=7";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=7";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=8"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==8) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=8";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=8";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=5";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=9"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=6";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=29"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==9) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=9";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=9";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=10"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==10) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=10";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=10";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=7";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=30"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=8";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=11"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==11) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=11";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=11";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=12"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==12) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=12";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=12";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=9";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=13"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=10";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=14"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==13) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=13";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=13";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=93"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==14) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=14";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=14";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=93"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==15) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=15";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=15";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=16"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==16) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=16";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=16";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=11";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=17"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=12";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=23"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==17) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=17";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=17";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=13";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=18"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=14";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=24"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==18) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=18";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=18";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=15";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=19"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=16";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=21"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==19) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=19";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=19";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=20"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==20) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=20";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=20";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=27"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==21) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=21";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=21";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=22"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==22) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=22";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=22";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=27"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==23) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=23";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=23";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=17";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=18"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=18";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=24"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==24) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=24";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=24";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=19";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=25"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=20";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=26"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==25) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=25";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=25";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==26) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=26";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=26";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=18"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==27) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=27";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=27";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=28"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==28) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=28";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=28";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=21";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=32"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=22";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=35"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==29) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=29";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=29";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=23";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=30"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=24";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=11"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==30) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=30";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=30";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=31"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==31) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=31";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=31";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=11"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==32) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=32";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=32";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=25";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=33"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=26";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=41"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==33) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=33";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=33";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=27";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=34"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=28";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=38"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==34) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=34";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=34";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=41"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==35) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=35";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=35";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=29";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=36"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=30";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=40"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==36) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=36";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=36";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=31";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=37"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=32";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=39"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==37) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=37";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=37";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=41"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==38) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=38";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=38";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=41"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==39) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=39";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=39";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==40) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=40";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=40";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=41"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==41) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=41";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=41";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=42"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==42) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=42";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=42";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=43"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==43) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=43";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=43";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=33";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=44"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=34";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=52"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==44) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=44";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=44";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=35";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=45"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=36";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=46"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==45) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=45";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=45";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=47"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==46) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=46";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=46";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=47"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==47) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=47";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=47";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=48"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==48) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=48";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=48";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=49"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id==49) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=49";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=49";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=37";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=50"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=38";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=51"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==50) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=50";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=50";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=53"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==51) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=51";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=51";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=53"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==52) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=52";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=52";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o incio.</button></a>';

  echo '</div>';
}
if ($id==53) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=53";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=53";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=39";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=54"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=40";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=82"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==54) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=54";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=54";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=55"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==55) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=55";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=55";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=41";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=56"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=42";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=73"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==56) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=56";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=56";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=43";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=57"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=44";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=64"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==57) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=57";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=57";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=45";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=58"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=46";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=65"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==58) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=58";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=58";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=47";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=59"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=48";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=66"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==59) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=59";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=59";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=49";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=60"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=50";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=67"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==60) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=60";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=60";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=51";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=61"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=52";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=68"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==61) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=61";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=61";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=53";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=62"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=54";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=69"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==62) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=62";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=62";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=55";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=63"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=56";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=72"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==63) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=63";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=63";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==64) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=64";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=64";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=57"><button id="continuar">Explorar a área.</button></a>';

  echo '</div>';
}
if ($id==65) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=65";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=65";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==66) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=66";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=66";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=59"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==67) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=67";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=67";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==68) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=68";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=68";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==69) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=69";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=69";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=57";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=70"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=58";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=71"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==70) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=70";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=70";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==71) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=71";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=71";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==72) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=72";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=72";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==73) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=73";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=73";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=74"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==74) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=74";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=74";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=59";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=75"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=60";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=80"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==75) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=75";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=75";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=61";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=76"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=62";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=79"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==76) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=76";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=76";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=63";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=77"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=64";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=78"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==77) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=77";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=77";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==78) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=78";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=78";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==79) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=79";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=79";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==80) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=80";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=80";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=81"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==81) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=81";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=81";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
//Escolha de ir com sofia ao invés de pietro
if ($id==82) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=82";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=82";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=83"><button id="continuar">Investigar o quarto de onde vem o som.</button></a>';

  echo '</div>';
}
if ($id==83) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=83";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=83";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=67";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=84"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=68";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=92"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==84) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=84";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=84";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=69";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=85"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=70";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=88"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==85) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=85";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=85";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=86"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==86) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=86";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=86";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=71";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=87"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=72";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=89"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==87) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=87";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=87";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==88) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=88";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=88";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==89) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=89";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=89";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=73";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=90"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=74";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=91"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==90) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=90";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=90";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==91) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=91";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=91";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==92) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=92";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=92";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
//Capitulo 2B
if ($id==93) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=93";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=93";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=94"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==94) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=94";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=94";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=95"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==95) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=95";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=95";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=75";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=96"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=76";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=97"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==96) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=96";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=96";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if ($id==97) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=97";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=97";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=98"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==98) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=98";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=98";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=99"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==99) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=99";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=99";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=100"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==100) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=100";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=100";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=101"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==101) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=101";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=101";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=77";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=102"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=78";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=103"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==102) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=102";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=102";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=104"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==103) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=103";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=103";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o incio.</button></a>';

  echo '</div>';
}
if ($id==104) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=104";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=104";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=105"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==105) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=105";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="796">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=105";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=79";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=106"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=80";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=107"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==106) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=106";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=106";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=107"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==107) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=107";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="796">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=107";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=81";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=108"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=82";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=109"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==108) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=108";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=108";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=110"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==109) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=109";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=109";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=110"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==110) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=110";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=110";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=111"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==111) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=111";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=111";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=112"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==112) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=112";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=112";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="historia?id=113"><button id="continuar">Continuar.</button></a>';

  echo '</div>';
}
if ($id==113) {
  $sql = "SELECT imagem FROM historia WHERE id_cena=114";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=114";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=83";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<a href="historia?id=115"><button id="escolha1">'.$dados['texto_escolha'].'</button></a>';

  $sql = "SELECT texto_escolha FROM escolha WHERE id_escolha=84";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  
  echo '<a href="historia?id=116"><button id="escolha2">'.$dados['texto_escolha'].'</button></a>';

  echo '</div>';
}
if ($id==114) {
  header('Location: historia?id=113');
}
if($id==115){
  $sql = "SELECT imagem FROM historia WHERE id_cena=115";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=115";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
if($id==116){
  $sql = "SELECT imagem FROM historia WHERE id_cena=116";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo '<div id="image">';
  echo '<img id="img" src='.$dados['imagem'].' height="857" width="778">';
  echo '</div>';
  echo '<div id="conteudo">';

  $sql = "SELECT conteudo_historia FROM historia WHERE id_cena=116";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['conteudo_historia'].'';

  echo '<a href="painel"><button id="continuar">Voltar para o inicio.</button></a>';

  echo '</div>';
}
}
}
?>
</div>
</body>
</html>