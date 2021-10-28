<?php
session_start();
include('../verificarlogin.php');
include('../conexao.php');

$id_item=$_POST['id_item'];
$id_imagem=$_POST['id_imagem'];

$arquivo="../../img/CardapioIMG/".$id_imagem;

$deletar=unlink($arquivo);

$SQL="DELETE from Cardapio where id_item={$id_item}";

mysqli_query($conexao,$SQL);

$checkdeletar=mysqli_error($conexao);
  mysqli_close($conexao);

 if ($checkdeletar==null) {

   $_SESSION['checkdeletar']="sucesso";

   header("Location:../paineladm.php");
 }
 else
{
   $_SESSION['checkdeletar']="errocard";
   header("Location:../paineladm.php");
 }


 $_SESSION['cardconfirm']="abrir";

 ?>
