<?php
include('../verificarlogin.php');
require_once('../ClassesSistema.php');


$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$valor=$_POST['valor'];

if(isset($_FILES['arquivo'])){
  $extensao=strtolower(substr($_FILES['arquivo']['name'],-4));
  $novo_nome=md5(time()) . $extensao;
  $diretorio='../../img/CardapioIMG/';
  move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);

$c1=new Cardapio;

$c1->setnome($nome);
$c1->setdescricao($descricao);
$c1->setvalor($valor);
$c1->setid_imagem($novo_nome);

$msgerro=$c1->inserircardapio();

if ($msgerro==null) {
$_SESSION["cardapioalert"]='Salvo com Sucesso !';
header('Location:../paineladm.php');

}else{

$_SESSION["cardapioalert"]=$msgerro;
header('Location:../paineladm.php');

}


}



 ?>
