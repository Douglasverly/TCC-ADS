<?php
session_start();
include('../conexao.php');?>

<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="estilopedidos.css">
  </head>
  
  <body>
    <div id="topo">
    		<div id="logo"></div>
    </div>

<div class="central">


	<div id="conteudo">
      <?php

        $SQL="SELECT *FROM Pedido WHERE id_conta='{$_SESSION['id_usuario']}'";
        $resultado=mysqli_query($conexao,$SQL);

        while ($retorno=mysqli_fetch_assoc($resultado)) {

            $descricao=explode('|',$retorno['descricao']);

            ?>
            <div class="pedidos">
            <textarea readonly="readonly">Descrição:
                <?php foreach($descricao as $key => $desc){
                    echo "\n".$desc."\n";
                  }?></textarea>


                        <label>Valor do Pedido: R$ <?php echo $retorno['valor_total']; ?></label>
                        <label>Data do Pedido: <?php echo $retorno['data']; ?></label>
                        <label>Situação: <?php echo $retorno['situacao']; ?></label>
        </div>

        <?php

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

				<li><a style="text-decoration:none;color:black;"href="telacliente.php"><label class="itemmenu"for="pedidos" id="menuFuncionario">Cardápio</label></a></li>


				<li><a style="text-decoration:none;color:black;"href="carrinho.php"><label class="itemmenu"for="carrinho"id="menuCardapio">Carrinho</label></a></li>


				<li><label class="itemmenu"for="itemHistorico" id="menuPedido"> Pedidos</label></li>


			</ul>


	    </div>

	</div>


</div>




<div id="final">

	&#169; 2021 Healthy Food

</div>





  </body>
</html>
