<?php session_start();
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="estilocliente.css">
  </head>
  <body>
<?php if($_SESSION['pedidoinserido']=="valido"){ ?> <script>alert("Pedido Finalizado Obrigado por Comprar Conosco!")</script>  <?php  unset($_SESSION['pedidoinserido']);  } ?>
<?php if($_SESSION['pedidoinserido']=="erro"){ ?> <script>alert("Ocorreu um erro ou finalizar o pedido por favor tente novamente!")</script>  <?php  unset($_SESSION['pedidoinserido']); } ?>

    <div id="topo">
    		<div id="logo"></div>
    </div>

<div class="central">


	<div id="conteudo">

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

            }
     ?>



		</div>


	<div id="painel">

		<div id="boasvindas">
		<label>Bem Vindo(a),<?php echo($_SESSION['nome']); ?> !</label>
		</div>
		<a href="../logout.php" style="text-decoration:none;color:black;margin-bottom:2px;">Deslogar!</a>
    <label for="paineldeusuario"style="cursor:pointer;">Painel de usuário!</label>


		<div id="menu">
			<ul>

				<li><label class="itemmenu"for="pedidos" id="menuFuncionario">Cardápio</label></li>


				<li><a style="text-decoration:none;color:black;"href="carrinho.php"><label class="itemmenu"for="carrinho"id="menuCardapio">Carrinho</label></a></li>


				<li><a style="text-decoration:none;color:black;"href="pedidoscliente.php"><label class="itemmenu"for="itempedido"id="menupedido">Pedidos</label></a></li>


			</ul>


	</div>

	</div>


</div>




<div id="final">

	&#169; 2021 Healthy Food

</div>





  </body>
</html>
