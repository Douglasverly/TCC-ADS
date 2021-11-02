<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="estilocliente.css">
  </head>
  <body>

<?php
include('../conexao.php');
$SQL="SELECT *FROM Cardapio";
$resultado=mysqli_query($conexao,$SQL);

?>
<div class="container-carrinho">

<?php


while ($itens=mysqli_fetch_assoc($resultado)) {

?>

<div class="produto">
  <img src="../../img/CardapioIMG/<?php echo $itens['id_imagem'] ?>"/>
  <label>Nome: <?php echo $itens['nome'];  ?></label>
  <label>Valor: R$ <?php echo $itens['valor']; ?></label>
  <a href="?adicionar=<?php echo $itens['id_item']; ?>">adicionar ao carrinho!</a>
</div>



<?php
}

 ?>
</div>



<?php

  if(isset($_GET['adicionar'])){
      $idproduto=(int) $_GET['adicionar'];
          if (isset($_SESSION['carrinho'][$idproduto])) {
            $_SESSION['carrinho'][$idproduto]['QUANTIDADE']++;
            // code...
          }else {
            $_SESSION['carrinho'][$idproduto]=array('QUANTIDADE'=>1,'idproduto'=>$idproduto);
          }
          echo "<script> alert('Adicionado ao Carrinho!') </script>";

        }else {

          echo "o Produto nao Existe!";
        }


 ?>



 <?php
 foreach ($_SESSION['carrinho'] as $key => $value) {
   echo "<p>Id:".$value['idproduto']." | Quantidade:".$value['QUANTIDADE']." </p>";

   // code...
 } ?>


  </body>
</html>
