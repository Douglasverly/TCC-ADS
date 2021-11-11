<?php include('../conexao.php');
      include('../verificarlogin.php');
      	error_reporting(0);
          ?>


<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="entregador.css">
  </head>
  <body>
<div class="painel">

    <nav>
      <ul>
        <li id="menu2"><a href="../logout.php">Deslogar</a></li>

      </ul>
    </nav>

    <label>Logado como : <?php  echo($_SESSION['nome']) ?> !</label>

</div>

<div class="conteudo">

  <form class="form1" action="buscapedido.php" method="post">

    <input id="input1" type="number" name="idpedido" >
    <input type="submit" value="Buscar">

  </form>





  <div class="pedido"id="carregar"onload="buscar()">

    <label class="itens"id="C1"for="">Nome:<?php echo " ".$_SESSION['nomepedido'] ?></label>
    <label class="itens"id="C2"for="">Sobrenome:<?php echo " ".$_SESSION['sobrenomepedido'] ?></label>
    <label class="itens"id="C3"for="">Telefone:<?php echo" ".$_SESSION['telefonepedido']  ?></label>
    <label class="itens"id="C4"for="">Pedido:<?php echo" ".$_SESSION['id_pedido'] ?></label>

    <label class="itens"id="C5"for="">Rua:<?php  echo " ".$_SESSION['rua'] ?></label>
    <label class="itens"id="C6"for="">N°:<?php echo$_SESSION['numero'] ?></label>
    <label class="itens"id="C7"for="">Complemento:<?php echo  " ".$_SESSION['complemento'] ?></label>
    <label class="itens"id="C8"for="">Bairro:<?php echo " ".$_SESSION['bairro'] ?></label>
    <label class="itens"id="C9"for="">Cidade:<?php echo " ".$_SESSION['cidade'] ?></label>
    <label class="itens"id="C10"for="">Cep:<?php echo " ". $_SESSION['cep'] ?></label>



    <form class="" action="atualizaentregador.php" method="post">

      <input type="text" style="display:none;"name="id_pedido" value="<?php echo$_SESSION['id_pedido'] ?>">

      <label class="itens"id="C11"for="">Situação</label>

      <input class="itens"id="C12"type="text" name="situacao" value="<?php echo $_SESSION['situacao']; ?>">

      <input class="itens"id="C13"type="submit" value="Atualizar">

    </form>


<?php
unset($_SESSION['nomepedido']);
unset($_SESSION['sobrenomepedido'] );
unset($_SESSION['telefonepedido'] );
unset($_SESSION['id_pedido'] );

unset($_SESSION['rua']);
unset($_SESSION['numero']);
unset($_SESSION['complemento']);
unset($_SESSION['bairro'] );
unset($_SESSION['cidade']) ;
unset($_SESSION['cep'] );


unset($_SESSION['id_pedido']);

unset($_SESSION['situacao']);








 ?>




  </div>


</div>

  </body>
</html>

















<?php











 ?>
