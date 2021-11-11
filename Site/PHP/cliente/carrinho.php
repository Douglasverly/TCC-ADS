<?php session_start();
  include('../conexao.php');
  error_reporting(0);
  ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="estilocliente.css">
  </head>

  <body>
    <div id="topo">
        <div id="logo"></div>
    </div>
    <div class="itens-carrinho">

    <div class="centralizacarrinho">
     <?php

       if(!isset($_SESSION['carrinho'])){
          echo'Seu Carrinho está Vazio!';
       }else{

         foreach ($_SESSION['carrinho'] as $key => $value) {

            $SQL="SELECT * from cardapio where id_item=".$value['idproduto'];

            $resultado=mysqli_query($conexao,$SQL);

           while ($result=mysqli_fetch_assoc($resultado)) {


              if ($result['id_item']==$value['idproduto']) {

              $_SESSION['produto'][$result['id_item']]=array('nome'=>$result['nome'],'valor'=>$result['valor'],'descricao'=>$result['descricao'],'idimagem'=>$result['id_imagem'],'qtd'=>$value['QUANTIDADE']);

               }

               }

            }
       $valortotal=0;
        foreach ($_SESSION['produto'] as $key => $conteudo) {

         ?>

          <div class="itemcarrinho">
            <img src="../../img/cardapioIMG/<?php echo $conteudo['idimagem']; ?>">
            <label><?php echo $conteudo['nome'];?></label>
            <label><?php echo $conteudo['qtd'];?></label>

            <label>Valor: R$<?php echo number_format((float)$conteudo['valor']*$conteudo['qtd'],2,'.','');?></label>
            <textarea readonly="readonly"><?php echo $conteudo['descricao'];?></textarea>

           </div>

        <?php

         $valortotal=$valortotal+$conteudo['valor']*$conteudo['qtd'];
}
          echo "<br>";
         echo "<br>";

       }
        ?>
     </div>

     <div class="formulariopagamento">


     <form class="formulario"action="efeturarpedido.php" method="post">

       <label style="margin-bottom:80px;font-weight:600;">Valor Total: R$<?php echo number_format((float) $valortotal,2,'.',''); ?></label>


       <input style="display:none;"type="text" name="valortotal" value="<?php echo $valortotal; ?>">

       <fieldset style="border:1px solid #344e0c">
         <legend style="font-weight:600;">Forma de Pagamento</legend>

         <label for="dinheiro">Dinheiro</label>
         <input type="radio" name="formadepagamento"value="dinheiro"id="dinheiro">


         <label for="cartao">Cartão</label>
         <input type="radio" name="formadepagamento"value="cartao"id="cartao">


         <label for="pix">PIX</label>
         <input type="radio" name="formadepagamento"value="pix"id="pix">

       </fieldset>
     <br>


     <fieldset style="border:1px solid #344e0c">
       <legend style="font-weight:600;">Troco</legend>

     <label for="trocosim">SIM</label>
     <input type="radio" name="troco" value="sim"id="trocosim">

     <label for="troconao">NÃO</label>
     <input type="radio" name="troco" value="nao"id="troconao">

     <label for="">Valor:</label>
     <input type="text" name="valortroco" placeholder="Troco para Quanto?" >
     </fieldset>


<br>
<fieldset class="endereco"style="border:1px solid #344e0c">
  <legend style="font-weight:600;">Endereço de Entrega</legend>
  <br>

  <?php


  $SQLendereco="SELECT id_endereco,rua,numero from endereco where id_usuario='{$_SESSION['id_usuario']}'";
  $buscaendereco=mysqli_query($conexao,$SQLendereco);
  while ($buscaen=mysqli_fetch_assoc($buscaendereco)) {
    ?>
    <input type="radio" name="endereco" id="<?php echo$buscaen['rua']?>" value="<?php echo $buscaen['id_endereco'];?>"> <label for="<?php echo$buscaen['rua']?>"><?php echo$buscaen['rua']?></label> <label> n°<?php echo$buscaen['numero']?></label><br>
    <?php
    // code...
  }

   ?>

</fieldset>


<input type="submit" name="efetuarpagamento" value="Finalizar Pedido" id="Fpedido">


</form>

</div>
    <a class="botaosair"href="limparcarrinho.php">Limpar Carrinho</a>
    <a class="botaosair"href="telacliente.php">Voltar</a>

    </div>

<div id="final">


<a href="#">Local de Cobertura</a> <a href="#">Endereço</a> <a href="#"> Whatsapp</a>
&#169; 2021 Helf Food

</div>




  </body>
</html>
