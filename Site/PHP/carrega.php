<?php include('conexao.php');?>
<html>
<head><link rel="stylesheet" href="../css/estilopaineladm.css"></head>    
</html>

<?php
									$resultado_pedido="SELECT * FROM Pedido";
									$busca_pedido=mysqli_query($conexao,$resultado_pedido);
										
									while($contador=mysqli_fetch_assoc($busca_pedido)) {
										$descricao=explode('|',$contador['descricao']);
										?>

									<form action="atualizapedido.php" method="POST" style="height:110px;"class="carditenspedido"> 
										<textarea class="P1"><?php foreach($descricao as $key => $desc){
                 						   echo "\n".$desc."\n";
                 						 }?>
				 						 </textarea>
										<label class="P2"for="">R$<?php echo $contador['valor_total'];?> </label>
										<label class="P3"for=""><?php echo $contador['form_pag'];?> </label>
										<input type="text" style="display: none;" name="id_pedido"value="<?php echo $contador['id_pedido'];?>">
										<input type="text"class="P4"name="situacao"for=""value="<?php echo $contador['situacao'];?>">
										<input type="submit"class="P5"value="Atualizar">

									</form>

										<?php
										}
										
										?>