<?php
include('../conexao.php');
include('../verificarlogin.php');
require_once('../ClassesSistema.php');

$id_item=$_POST['id_item'];
$id_imagem=$_POST['id_imagem'];
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$valor=$_POST['valor'];




if($_FILES['arquivo']['size']!=0)
{

  $arquivo="../../img/CardapioIMG/".$id_imagem;
  $deletar=unlink($arquivo);

  $novo_nome=$id_imagem;
  $diretorio='../../img/CardapioIMG/';
  move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);
}




$c1=new Cardapio;

$c1->setnome($nome);
$c1->setdescricao($descricao);
$c1->setvalor($valor);
$c1->setid_imagem($id_imagem);

$msgerro=$c1->atualizarcard($id_item);



if ($msgerro=='Atualizado com Sucesso !') {
$_SESSION["cardapioalert"]=$msgerro;
$_SESSION["checar"]=true;
header('Location:../paineladm.php');
}

if ($msgerro=='Erro ao Atualizar !'){
$_SESSION["cardapioalert"]=$msgerro;
$_SESSION["checar"]=true;
header('Location:../paineladm.php');
}





 ?>
