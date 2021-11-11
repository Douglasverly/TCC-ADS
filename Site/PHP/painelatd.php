


		<?php
		error_reporting(0);
		include('conexao.php');
		include('verificarlogin.php');
		?>


		<!DOCTYPE html>
		<html>
		<head>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
			<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
			<link rel="manifest" href="/site.webmanifest">
			<meta charset="utf-8">
			<title>HealthyFood-Painel</title>
			<link rel="stylesheet" type="text/css" href="../css/estilopaineladm.css">
		</head>
		<body>



		<input class="botaocontrole"type="radio" name="menu1"id="default">


		<input class="botaocontrole"type="radio" name="menu1" id="itemFuncionario">
		<input class="botaocontrole"type="radio" name="menu1" id="itemCardapio">
		<input class="botaocontrole"type="radio" name="menu1" id="pedidos" checked>

		<input class="botaocontrole"type="radio" name="menu1" id="itemCalc-Lucro"<?php if ($_SESSION['VERIFICALUCRO']=='sim'){ ?> checked
		<?php ;$_SESSION['VERIFICALUCRO']=null; }  ?>>
		<input class="botaocontrole"type="radio" name="menu1" id="CFuncionario" <?php if($_SESSION['atualizacliente']=='valida') { ?> checked <?php } ?>>
		<input class="botaocontrole"type="radio" name="menu1" id="RFuncionario" <?php if($_SESSION['buscacliente'] =='valida'){?>checked<?PHP } ?>>
		<input class="botaocontrole"type="radio" name="menu1" id="UFuncionario" <?php if($_SESSION['atualizafunc'] == 'atualizafunc'){?>checked<?PHP } ?>>
		<input class="botaocontrole"type="radio" name="menu1" id="DFuncionario"<?php if($_SESSION['CHECAREXCLUIR'] == 'CHECAREXCLUIR'){?>checked<?PHP } ?>>


		<input class="botaocontrole"type="radio" name="menu1" id="CCardapio">
		<input class="botaocontrole"type="radio" name="menu1" id="RCardapio">
		<input class="botaocontrole"type="radio" name="menu1" id="UCardapio"<?php if($_SESSION['checar'] ==true){?>checked<?PHP $_SESSION['checar'] = false; } ?>>
		<input class="botaocontrole"type="radio" name="menu1" id="DCardapio"<?php if($_SESSION['cardconfirm'] == 'abrir'){?>checked<?PHP } ?>>





		<div id="topo">
				<div id="logo"></div>
		</div>



		<div class="central">


			<div id="conteudo">

				<div class="janela" id="CadFuncionario">
					<div class="bordatop"><label for="default">X</label></div>
					<p>Atualizar Cliente</p>

					<form action="atendentephp/atualizarcliente.php" method="POST"style="height:30px;margin-bottom:30px;">
						<select class="coluna1-1"style="cursor:pointer;"name="selectusuario"><option>Selecionar Cliente</option>

							<?php
									$resultado_func="SELECT id_usuario,nome,sobrenome FROM usuario WHERE id_cargo= 'CLT-01' ";
									$busca_idfunc=mysqli_query($conexao,$resultado_func);
									while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
									<option value="<?php echo $contador['id_usuario'];?>">

										<?php
										echo $contador['nome'];echo" "; echo$contador['sobrenome'];
										?>

									</option>
										<?php
										}
										?>
						</select>


						<input class="coluna2-1" type="submit" name="buscarcliente" value="Buscar" style="cursor:pointer;background-color:greenyellow;height:20px;">
					 </form>

					 						<?php if ($_SESSION['atualizacliente']=='valida'){

												$SQLBUSCA="SELECT *FROM usuario WHERE id_usuario='{$_SESSION['CLIENTEIDAUT']}'";

												$RCLIENTEBUSCA=mysqli_query($conexao,$SQLBUSCA);

												$buscacliente=mysqli_fetch_assoc($RCLIENTEBUSCA);  ?>


					<form action="atendentephp/inserecliente.php" method="POST">


							<div id="DadosPessoais">
		            <fieldset class="fieldset"><legend>Dados Pessoais</legend>

		            <input class="coluna1-1" type="text" name="nome" placeholder="Nome aquí" maxlength="10"value="<?php echo $buscacliente['nome']; ?>">
		            <input class="coluna1-2"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20"value="<?php echo $buscacliente['sobrenome']; ?>">
		            <input class="coluna1-3"type="text" name="cpf" placeholder="CPF aquí" maxlength="11"value="<?php echo $buscacliente['id_usuario']; ?>">
		            <input class="coluna2-1"type="text" name="datanasc" placeholder="Data de Nascimento aquí"value="<?php echo $buscacliente['dt_nasc']; ?>">
		            <input class="coluna2-2"type="text" name="sexo" placeholder="Sexo M / F" maxlength="12"value="<?php echo $buscacliente['sexo']; ?>">
		            <input class="coluna2-3"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12"value="<?php echo $buscacliente['telefone']; ?>">
		            <input class="coluna3-1"type="email" name="email" placeholder="E-mail aquí" value="<?php echo $buscacliente['email']; ?>">
		            </fieldset>

							</div>

						<?php

						$SQLBUSCAEND="SELECT *FROM Endereco WHERE id_usuario= '{$_SESSION['CLIENTEIDAUT']}'";

						$BUSCACLIENTEEND=mysqli_query($conexao,$SQLBUSCAEND);
						$buscaclienteend=mysqli_fetch_assoc($BUSCACLIENTEEND);



						 ?>




							<div id="Endereco">
		                <fieldset class="fieldset"><legend>Endereço</legend>

		                <input class="coluna1-1"type="text" name="cep"placeholder="CEP aquí"value="<?php echo $buscaclienteend['cep']; ?>">
		                <input class="coluna1-2"type="text" name="rua"placeholder="Rua aquí"value="<?php echo $buscaclienteend['rua']; ?>">
		                <input class="coluna1-3"type="text" name="numero"placeholder="N° aquí"value="<?php echo $buscaclienteend['numero']; ?>">
		                <input class="coluna2-1"type="text" name="complemento"placeholder="Complemento aquí"value="<?php echo $buscaclienteend['complemento']; ?>">
		                <input class="coluna2-2"type="text" name="cidade"placeholder="Cidade aquí"value="<?php echo $buscaclienteend['cidade']; ?>">
		                <input class="coluna2-3"type="text" name="bairro"placeholder="Bairro aquí"value="<?php echo $buscaclienteend['bairro']; ?>">
		                <input class="coluna3-1"type="text" name="uf"placeholder="UF aquí"value="<?php echo $buscaclienteend['uf']; ?>">

		                <button type="submit" class="coluna3-3" id="salvarFucionario">Salvar</button>

		                </fieldset>

							</div>



		    </form>

<?php


				unset($_SESSION['atualizacliente']);
				unset($_SESSION['CLIENTEIDAUT']);
			}else{?>

				<form action="atendentephp/inserecliente.php" method="POST">


						<div id="DadosPessoais">
							<fieldset class="fieldset"><legend>Dados Pessoais</legend>

							<input class="coluna1-1" type="text" name="nome" placeholder="Nome aquí" maxlength="10">
							<input class="coluna1-2"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20">
							<input class="coluna1-3"type="text" name="cpf" placeholder="CPF aquí" maxlength = "11">
							<input class="coluna2-1"type="text" name="datanasc" placeholder="Data de Nascimento aquí">
							<input class="coluna2-2"type="text" name="sexo" placeholder="Sexo M / F" maxlength="12">
							<input class="coluna2-3"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12">
							<input class="coluna3-1"type="email" name="email" placeholder="E-mail aquí" >
							</fieldset>

						</div>

						<div id="Endereco">
									<fieldset class="fieldset"><legend>Endereço</legend>

									<input class="coluna1-1"type="text" name="cep"placeholder="CEP aquí">
									<input class="coluna1-2"type="text" name="rua"placeholder="Rua aquí">
									<input class="coluna1-3"type="text" name="numero"placeholder="N° aquí">
									<input class="coluna2-1"type="text" name="complemento"placeholder="Complemento aquí">
									<input class="coluna2-2"type="text" name="cidade"placeholder="Cidade aquí">
									<input class="coluna2-3"type="text" name="bairro"placeholder="Bairro aquí">
									<input class="coluna3-1"type="text" name="uf"placeholder="UF aquí">

									<button type="submit" class="coluna3-3" id="salvarFucionario">Salvar</button>

									</fieldset>

						</div>

			</form>




			<?php } ?>








					</div>


<!--  -------------JANELA BUSCAR-----------   -->


					<div class="janela" id="BusFuncionario">
						<div class="bordatop"><label for="default">X</label></div>
						<p>Buscar Cliente</p>



						<form action="atendentephp/buscarrcliente.php" method="POST"style="height:30px;margin-bottom:30px;">
							<select class="coluna1-1"style="cursor:pointer;"name="selectusuario"><option>Selecionar Cliente</option>

								<?php
										$resultado_func="SELECT id_usuario,nome,sobrenome FROM usuario WHERE id_cargo= 'CLT-01' ";
										$busca_idfunc=mysqli_query($conexao,$resultado_func);
										while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
										<option value="<?php echo $contador['id_usuario'];?>">

											<?php
											echo $contador['nome'];echo" "; echo$contador['sobrenome'];
											?>

										</option>
											<?php
											}
											?>
							</select>


							<input class="coluna2-1" type="submit" name="buscarcliente" value="Buscar" style="cursor:pointer;background-color:greenyellow;height:20px;">
						 </form>


	<?php if($_SESSION['buscacliente']=='valida') {

	$SQLBUSCAR="SELECT *FROM Usuario WHERE id_usuario='{$_SESSION['CLIENTEIDBUS']}'";

	$SQLBUSCARresult = mysqli_query($conexao,$SQLBUSCAR);

	$SQLBUSCARresultado=mysqli_fetch_assoc($SQLBUSCARresult);
	?>



						 <div id="DadosPessoais">
 									<fieldset class="fieldset"><legend>Dados Pessoais</legend>
 										<label id="buscanome"class="coluna1-1">Nome: <?php echo $SQLBUSCARresultado['nome']; ?></label>
 										<label id="buscasobrenome"class="coluna1-2">Sobrenome: <?php echo $SQLBUSCARresultado['sobrenome']; ?></label>


 										<label id="buscacpf"class="coluna3-1">CPF: <?php echo $SQLBUSCARresultado['id_usuario']; ?></label>
 										<label id="buscadata"class="coluna2-1">Nasc: <?php echo $SQLBUSCARresultado['dt_nasc']; ?></label>
 										<label id="buscatelefone"class="coluna2-2">Tel: <?php echo $SQLBUSCARresultado['telefone']; ?></label>
 										<label id="buscaemail"class="coluna3-2">E-mail: <?php echo $SQLBUSCARresultado['email']; ?></label>

 									</fieldset>

 						</div>



						<?php
						$SQLBUSCAR1="SELECT *FROM Endereco WHERE id_usuario= '{$_SESSION['CLIENTEIDBUS']}'";
						$SQLBUSCARresult1=mysqli_query($conexao,$SQLBUSCAR1);
						$SQLBUSCARresultado1=mysqli_fetch_assoc($SQLBUSCARresult1); ?>

						<div id="Endereco">
										<fieldset class="fieldset"><legend>Endereço</legend>

											<label class="coluna1-1">CEP: <?php echo $SQLBUSCARresultado1['cep']; ?></label>
											<label class="coluna1-2">Rua: <?php echo $SQLBUSCARresultado1['rua']; ?></label>
											<label class="coluna1-3">N°: <?php echo $SQLBUSCARresultado1['numero']; ?></label>
											<label class="coluna2-1">CMPL: <?php echo $SQLBUSCARresultado1['complemento']; ?></label>
											<label class="coluna2-2">Cidade: <?php echo $SQLBUSCARresultado1['cidade']; ?></label>
											<label class="coluna2-3">Bairro: <?php echo $SQLBUSCARresultado1['bairro']; ?></label>
											<label class="coluna3-1">UF: <?php echo $SQLBUSCARresultado1['uf']; ?></label>

										</fieldset>

						</div>


					<?php
					unset($_SESSION['CLIENTEIDBUS']);
				  unset($_SESSION['buscacliente']);} else {?>

									<div id="DadosPessoais">
											 <fieldset class="fieldset"><legend>Dados Pessoais</legend>
												 <label id="buscanome"class="coluna1-1">Nome:</label>
												 <label id="buscasobrenome"class="coluna1-2">Sobrenome: </label>


												 <label id="buscacpf"class="coluna3-1">CPF: </label>
												 <label id="buscadata"class="coluna2-1">Nasc: </label>
												 <label id="buscatelefone"class="coluna2-2">Tel: </label>
												 <label id="buscaemail"class="coluna3-2">E-mail: </label>

											 </fieldset>

									</div>


									<div id="Endereco">
												 <fieldset class="fieldset"><legend>Endereço</legend>

													 <label class="coluna1-1">CEP: </label>
													 <label class="coluna1-2">Rua: </label>
													 <label class="coluna1-3">N°:</label>
													 <label class="coluna2-1">CMPL: </label>
													 <label class="coluna2-2">Cidade:</label>
													 <label class="coluna2-3">Bairro:</label>
													 <label class="coluna3-1">UF:</label>

												 </fieldset>

									</div>




									<?php
					} ?>



						</div>


<div class="janela" id="CadCardapio">
							<div class="bordatop"><label for="default">X</label></div>
							<p>Cadastrar Item Cardápio</p>
								<?php
									if ($_SESSION['cardapioalert']=='Salvo com Sucesso !'){
								 ?>
								 <script>alert("Salvo com Sucesso !")</script>
								 <?php
								 $_SESSION['cardapioalert']=null;
							 }
									?>

									<?php
										if ($_SESSION['cardapioalert']=='Erro ao cadastrar !'){
									 ?>
									 <script>alert("Erro ao cadastrar !")</script>
									 <?php
									 $_SESSION['cardapioalert']=null;
								 }
										?>




								<form action="cardapiophp/inserecard.php" method="POST" enctype="multipart/form-data">


							<div id="DadosPessoais">



										<input class="coluna1-2"type="text" name="nome" placeholder="Nome aquí" maxlength="20">
										<input class="coluna2-2"type="text" name="valor" placeholder="Valor aquí" >
										<input class="coluna3-2"type="text" name="descricao" placeholder="Descrição aquí"minlength="30"maxlength="250">
										<input class="coluna2-3"type="FILE" name="arquivo" style="border:none;	width: 220px;">



							</div>


							<div id="DadosCargo">

											<button type="submit" class="coluna2-1" id="buscafuncionario">Salvar</button>



							</div>



							<div id="Endereco">





							</div>



								</form>

</div>

<div class="janela" id="BusCardapio">
							<div class="bordatop"><label for="default">X</label>
							</div>
							<p>Visualizar Item Cardápio</p>

							<div class="cardapiobusca">

								<?php
									$resultado_card="SELECT * FROM Cardapio";
									$busca_cardapio=mysqli_query($conexao,$resultado_card);

									while($contador=mysqli_fetch_assoc($busca_cardapio)) {?>
									<div class="carditens">

										<img src="../img/CardapioIMG/<?php echo $contador['id_imagem'];?>" >
										<label class="coluna1"for=""><?php echo $contador['nome'];?> </label>
										<label class="coluna2"for="">R$ <?php echo $contador['valor'];?> </label>

									</div>

										<?php
										}
										?>

							</div>


							</div>

<div class="janela" id="AtuCardapio">
							<div class="bordatop"><label for="default">X</label></div>
							<p>Atualizar Item Cardápio</p>

							<div class="cardapiobusca">


								<?php

									$resultado_card="SELECT * FROM Cardapio ORDER BY nome";
									$busca_cardapio=mysqli_query($conexao,$resultado_card);

									while($contador=mysqli_fetch_assoc($busca_cardapio)) {?>
									<form action="cardapiophp/atualizarcard.php" method="POST" enctype="multipart/form-data" style="width:100%;height: 100px;margin-bottom:2px;">
										<div class="carditens">

											<input type="text"name="id_item" style="display:none;" value="<?php echo $contador['id_item']; ?>">
											<input type="text"name="id_imagem" style="display:none;" value="<?php echo $contador['id_imagem']; ?>">



											<img src="../img/CardapioIMG/<?php echo $contador['id_imagem'];?>" >

											<input class="coluna1"type="FILE" name="arquivo" style="left:380px;width:120px;">
											<input class="coluna1" type="text" name="nome" placeholder="Nome do Item" value="<?php echo $contador['nome'];?>">
											<input class="coluna2" type="text" name="valor" placeholder="Valor" value="<?php echo $contador['valor'];?>">
											<textarea class="coluna3"name="descricao" rows="8" placeholder="Descrição" cols="80"><?php echo $contador['descricao'];?></textarea>

											<input type="submit"  value="Atualizar"  style="right:5px;bottom:5px;position:absolute;">

										</div>
									</form>
										<?php
										}
										?>


							</div>

							</div>

<div class="janela" id="ExcCardapio">
							<div class="bordatop"><label for="default">X</label></div>
							<p>Excluir Itens Cardápio</p>
								<?php
									$_SESSION['cardconfirm']=null;
								 ?>
							<div class="cardapiobusca">




								<?php
									$resultado_card="SELECT * FROM Cardapio ORDER BY nome";
									$busca_cardapio=mysqli_query($conexao,$resultado_card);

									while($contador=mysqli_fetch_assoc($busca_cardapio)) {?>
									<form action="cardapiophp/excluircard.php" method="POST"style="width:100%;height: 100px;margin-bottom:2px;">
										<div class="carditens">
											<input type="text"name="id_item" style="display:none;" value="<?php echo $contador['id_item']; ?>">
											<input type="text"name="id_imagem" style="display:none;" value="<?php echo $contador['id_imagem']; ?>">


											<img src="../img/CardapioIMG/<?php echo $contador['id_imagem'];?>" >
											<label class="coluna1"for=""><?php echo $contador['nome'];?> </label>
											<label class="coluna2"for="">R$ <?php echo $contador['valor'];?> </label>
											<input type="submit"  value="Excluir" style="right:5px;bottom:5px;position:absolute;">

										</div>
									</form>
										<?php
										}
										?>


							</div>

</div>



<div class="janela" id="Pedidos">
							<div class="bordatop"><label for="default">X</label>
							</div>
							<p>Pedidos em Aberto</p>

							<div class="cardapiobusca" id="carrega">

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

							</div>


							</div>



<script>

setInterval(function(){


	$("#carrega").load('carrega.php');

	 },

	 9000);

</script>







</div>










			<div id="painel">

				<div id="boasvindas">
				<label>Bem Vindo(a),<?php echo($_SESSION['nome']); ?> !</label>
				</div>
				<a href="logout.php">Deslogar!</a>


				<div id="menu">
					<ul>

						<li><label class="itemmenu"for="itemFuncionario" id="menuFuncionario">Cliente</label></li>

							<ul class="submenu" id="sub1">
								<li><label class="itemmenu2"for="CFuncionario">Atualizar</label></li>
								<li><label class="itemmenu2"for="RFuncionario">Buscar</label></li>
								<li><label class="itemmenu2"for="UFuncionario">Deletar</label></li>
							</ul>


						<li><label class="itemmenu"for="itemCardapio"id="menuCardapio">Cardápio</label></li>

							<ul class="submenu" id="sub2">
								<li><label class="itemmenu2"for="CCardapio">Cadastrar</label></li>
								<li><label class="itemmenu2"for="RCardapio">Visualizar</label></li>
								<li><label class="itemmenu2"for="UCardapio">Atualizar</label></li>
								<li><label class="itemmenu2"for="DCardapio">Deletar</label></li>
							</ul>


						<li><label class="itemmenu"for="pedidos"id="lbpedidos">Pedidos</label></li>

					</ul>


				</div>




			</div>

		</div>




		<div id="final">

			&#169; 2021 Healthy Food

		</div>



		</body>
		</html>
