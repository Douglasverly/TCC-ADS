<?php
error_reporting(0);
include('conexao.php');
include('verificarlogin.php');
?>


<!DOCTYPE html>
<html>
<head>
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
<input class="botaocontrole"type="radio" name="menu1" id="itemHistorico">
<input class="botaocontrole"type="radio" name="menu1" id="itemCalc-Lucro">

<input class="botaocontrole"type="radio" name="menu1" id="CFuncionario">
<input class="botaocontrole"type="radio" name="menu1" id="RFuncionario" <?php if($_SESSION['checabusca'] != FALSE){?>checked<?PHP } ?>>
<input class="botaocontrole"type="radio" name="menu1" id="UFuncionario" <?php if($_SESSION['atualizafunc'] == 'atualizafunc'){?>checked<?PHP } ?>>
<input class="botaocontrole"type="radio" name="menu1" id="DFuncionario"<?php if($_SESSION['CHECAREXCLUIR'] == 'CHECAREXCLUIR'){?>checked<?PHP } ?>>


<input class="botaocontrole"type="radio" name="menu1" id="CCardapio">
<input class="botaocontrole"type="radio" name="menu1" id="RCardapio">
<input class="botaocontrole"type="radio" name="menu1" id="UCardapio">
<input class="botaocontrole"type="radio" name="menu1" id="DCardapio"<?php if($_SESSION['cardconfirm'] == 'abrir'){?>checked<?PHP } ?>>





<div id="topo">
		<div id="logo"></div>
</div>



<div class="central">


	<div id="conteudo">

		<div class="janela" id="CadFuncionario">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Cadastrar Funcionário</p>

			<?php
			if($_SESSION['inserido']=='inserido')
			{ ?> <script>alert('Funcionário Cadastrado !')</script> <?php $_SESSION['inserido']=null;} ?>

				<form action="inserefunc.php" method="POST">


			<div id="DadosPessoais">
						<fieldset class="fieldset"><legend>Dados Pessoais</legend>

						<input class="coluna1-1" type="text" name="nome" placeholder="Nome aquí" maxlength="10">
						<input class="coluna1-2"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20">
						<input class="coluna1-3"type="text" name="cpf" placeholder="CPF aquí" maxlength="11">
						<input class="coluna2-1"type="text" name="datanasc" placeholder="Data de Nascimento aquí">
						<input class="coluna2-2"type="text" name="sexo" placeholder="Sexo M / F" maxlength="12">
						<input class="coluna2-3"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12">
						<input class="coluna3-1"type="email" name="email" placeholder="E-mail aquí" >
						<input class="coluna3-2"type="login" name="login" placeholder="Login aquí" >
						<input class="coluna3-3"type="password" name="senha" placeholder="senha aquí"maxlength="10">

						</fieldset>

			</div>


			<div id="DadosCargo">
							<fieldset class="fieldset"><legend>Dados Cargo</legend>


                            <select name="selectcargo"class="coluna1-1" style="cursor:pointer;">

                                  <option value="">Selecione o Cargo</option>
                                  <option value="ADM-01">Administrador</option>
                                  <option value="ATD-01">Atendente</option>
                                  <option value="ENT-01">Entregador</option>
                                  <option value="Cozinheiro">Cozinheiro</option>
                            </select>
							<input class="coluna2-1"type="text" name="dtadmissao"placeholder="Data Admissão aquí">

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

			</div>


		<div class="janela" id="BusFuncionario">



			<div class="bordatop"><label for="default">X</label></div>
			<p>Buscar Funcionário</p>
			<?php
							if($_SESSION['checabusca'] != FALSE ) { ?>
				<form action="preenchefunc.php" method="POST">


			<div id="DadosPessoais">
						<fieldset class="fieldset"><legend>Dados Pessoais</legend>
							<select class="coluna1-1" style="cursor:pointer;"name="selectusuario">
								<option>Selecione o Funcionário</option>
								<?php
									$resultado_func="SELECT id_conta,id_access FROM Conta WHERE id_access BETWEEN 1 AND 4 ";
									$busca_idfunc=mysqli_query($conexao,$resultado_func);
									while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
									<option value="<?php echo $contador['id_conta'];?>">

										<?php
										$resultado_nome="SELECT nome,sobrenome from Usuario WHERE id_usuario='{$contador['id_conta']}'";
										$nomefunc=mysqli_query($conexao,$resultado_nome);
										$nome=mysqli_fetch_assoc($nomefunc);
										echo $nome['nome'];echo" "; echo$nome['sobrenome'];
										?>

									</option>
										<?php
										}
										?>






							</select>


							<label id="buscanome"class="coluna1-2">Nome: <?php echo ($_SESSION['nomefunc']); ?></label>
							<label id="buscasobrenome"class="coluna1-3">Sobrenome: <?php echo ($_SESSION['sobrenome']); ?></label>

							<button type="submit" id="buscafuncionario" class="coluna2-1">Buscar</button>

							<label id="buscacpf"class="coluna2-2">CPF: <?php echo ($_SESSION['cpf']); ?></label>
							<label id="buscadata"class="coluna2-3">Nasc: <?php echo ($_SESSION['dt_nasc']); ?></label>
							<label id="buscatelefone"class="coluna3-1">Tel: <?php echo ($_SESSION['telefone']); ?></label>
							<label id="buscaemail"class="coluna3-2">E-mail: <?php echo ($_SESSION['email']); ?></label>
							<label id="buscalogin"class="coluna3-3">Login: <?php echo ($_SESSION['login']); ?></label>

						</fieldset>

			</div>


			<div id="DadosCargo">
							<fieldset class="fieldset"><legend>Dados Cargo</legend>

								<label class="coluna1-1">Cargo: <?php echo ($_SESSION['cargo']); ?></label>
								<label class="coluna2-1">Salario: R$<?php echo ($_SESSION['salario']); ?></label>
								<label class="coluna3-1">Admissao: <?php echo ($_SESSION['dt_admissao']); ?></label>


							</fieldset>

			</div>


			<div id="Endereco">
							<fieldset class="fieldset"><legend>Endereço</legend>

								<label class="coluna1-1">CEP: <?php echo ($_SESSION['cep']); ?></label>
								<label class="coluna1-2">Rua: <?php echo ($_SESSION['rua']); ?></label>
								<label class="coluna1-3">N°: <?php echo ($_SESSION['numero']); ?></label>
								<label class="coluna2-1">CMPL: <?php echo ($_SESSION['complemento']); ?></label>
								<label class="coluna2-2">Cidade: <?php echo ($_SESSION['cidade']); ?></label>
								<label class="coluna2-3">Bairro: <?php echo ($_SESSION['bairro']); ?></label>
								<label class="coluna3-1">UF: <?php echo ($_SESSION['uf']); ?></label>

							</fieldset>

			</div>



				</form>

			</div>
			<?php
					$_SESSION['nomefunc']=null;
					$_SESSION['sobrenome']=null;
					$_SESSION['cpf']=null;
					$_SESSION['dt_nasc']=null;
					$_SESSION['telefone']=null;
					$_SESSION['email']=null;
					$_SESSION['login']=null;
					$_SESSION['cargo']=null;
					$_SESSION['salario']=null;
					$_SESSION['dt_admissao']=null;
					$_SESSION['cep']=null;
					$_SESSION['rua']=null;
					$_SESSION['numero']=null;
					$_SESSION['complemento']=null;
					$_SESSION['cidade']=null;
					$_SESSION['bairro']=null;
					$_SESSION['uf']=null;
					$_SESSION['checabusca']=null;


			 }
			else{
			 ?>
			 		<form action="preenchefunc.php" method="POST">


				<div id="DadosPessoais">
					<fieldset class="fieldset"><legend>Dados Pessoais</legend>
				<select class="coluna1-1" style="cursor:pointer;"name="selectusuario">
					<option>Selecione o Funcionário</option>
					<?php
						$resultado_func="SELECT id_conta,id_access FROM Conta WHERE id_access BETWEEN 1 AND 4 ";
						$busca_idfunc=mysqli_query($conexao,$resultado_func);
						while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
						<option value="<?php echo $contador['id_conta'];?>">

							<?php
							$resultado_nome="SELECT nome,sobrenome from Usuario WHERE id_usuario='{$contador['id_conta']}'";
							$nomefunc=mysqli_query($conexao,$resultado_nome);
							$nome=mysqli_fetch_assoc($nomefunc);
							echo $nome['nome'];echo" "; echo$nome['sobrenome'];
							?>

						</option>
							<?php
							}
							?>






				</select>


							<label id="buscanome"class="coluna1-2">Nome</label>
							<label id="buscasobrenome"class="coluna1-3">Sobrenome</label>

							<button type="submit" id="buscafuncionario" class="coluna2-1">Buscar</button>

							<label id="buscacpf"class="coluna2-2">CPF</label>
							<label id="buscadata"class="coluna2-3">Data Nascimento</label>
							<label id="buscatelefone"class="coluna3-1">Telefone</label>
							<label id="buscaemail"class="coluna3-2">E-Mail</label>
							<label id="buscalogin"class="coluna3-3">Login</label>

						</fieldset>

			</div>


			<div id="DadosCargo">
							<fieldset class="fieldset"><legend>Dados Cargo</legend>

								<label class="coluna1-1">Cargo</label>
								<label class="coluna2-1">Salário</label>
								<label class="coluna3-1">Data Admissão</label>


							</fieldset>

			</div>


			<div id="Endereco">
							<fieldset class="fieldset"><legend>Endereço</legend>

								<label class="coluna1-1">CEP</label>
								<label class="coluna1-2">Rua</label>
								<label class="coluna1-3">N°</label>
								<label class="coluna2-1">Complemento</label>
								<label class="coluna2-2">Cidade</label>
								<label class="coluna2-3">Bairro</label>
								<label class="coluna3-1">UF</label>

							</fieldset>

			</div>



				</form>

			</div>

				<?php }?>

		<div class="janela" id="AtuFuncionario">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Atualizar Funcionário</p>
							<?php if($_SESSION['alerte'] == "certo"){?>
								<script>alert("Dados Atualizados!")</script>

							<?php $_SESSION['alerte']=null;}?>


							<?php if($_SESSION['alerte']=="erro"){?>
								<script>alert("erro ao atualizar.")</script>
								<?php $_SESSION['alerte']=null; } ?>


								<?php if($_SESSION['checkdeletar'] == "sucesso"){?>
									<script>alert("Excluido com Sucesso!")</script>

								<?php $_SESSION['checkdeletar']=null;}?>


								<?php if($_SESSION['checkdeletar']=="errocard"){?>
									<script>alert("Erro ao Excluir.")</script>
									<?php $_SESSION['checkdeletar']=null; } ?>






			<?php
			if($_SESSION['atualizafunc']!='atualizafunc'){
				?>

				<form action="preencheatualizafunc.php" method="POST">


			<div id="DadosPessoais">
						<fieldset class="fieldset"><legend>Dados Pessoais</legend>

						<select class="coluna1-1"style="cursor:pointer;"name="selectusuario"><option>Selecionar Funcionário</option>

							<?php
									$resultado_func="SELECT id_conta,id_access FROM Conta WHERE id_access BETWEEN 1 AND 4 ";
									$busca_idfunc=mysqli_query($conexao,$resultado_func);
									while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
									<option value="<?php echo $contador['id_conta'];?>">

										<?php
										$resultado_nome="SELECT nome,sobrenome from Usuario WHERE id_usuario='{$contador['id_conta']}'";
										$nomefunc=mysqli_query($conexao,$resultado_nome);
										$nome=mysqli_fetch_assoc($nomefunc);
										echo $nome['nome'];echo" "; echo$nome['sobrenome'];
										?>

									</option>
										<?php
										}
										?>


						</select>

						<button type="submit" id="buscafuncionario" class="coluna2-1">Buscar</button>
						<label style="display: none;" name="atualizafunc" value="atualizafunc"></label>

						<input class="coluna1-2" type="text" name="nome" placeholder="Nome aquí" maxlength="10" >
						<input class="coluna1-3"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20">
						<input class="coluna2-2"type="text" name="cpf" placeholder="CPF aquí" maxlength="11">
						<input class="coluna2-3"type="text" name="datanasc" placeholder="Data de Nascimento aquí">
						<input class="coluna3-2"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12">
						<input class="coluna3-3"type="email" name="email" placeholder="E-mail aquí">

						</fieldset>

			</div>


			<div id="DadosCargo">
							<fieldset class="fieldset"><legend>Dados Cargo</legend>

							<input class="coluna1-1"type="text" name="cargo"placeholder="Cargo aquí">
							<input class="coluna2-1"type="text" name="salario"placeholder="Salário aquí">
							<input class="coluna3-1"type="text" name="dtadmissao"placeholder="Data Admissão aquí">

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



			<?php
			}
			?>

			<?php
			if($_SESSION['atualizafunc']=='atualizafunc') { ?>

				<form action="atualizafunc.php" method="POST">


				<div id="DadosPessoais">
						<fieldset class="fieldset"><legend>Dados Pessoais</legend>

						<label style="display: none;" name="atualizafunc" value="atualizafunc"></label>
						<input class="coluna1-2" type="text" name="nome" placeholder="Nome aquí" maxlength="10" value="<?php echo ($_SESSION['nomefunc_at']); ?>">
						<input class="coluna1-3"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20"value="<?php echo ($_SESSION['sobrenome_at']); ?>">
						<label class="coluna2-2"name="cpf" placeholder="CPF aquí" maxlength="11"style="font-size:12px;"><?php echo ($_SESSION['cpf_at']); ?></label>
						<input class="coluna2-3"type="text" name="datanasc" placeholder="Data de Nascimento aquí"value="<?php echo ($_SESSION['dt_nasc_at']); ?>">
						<input class="coluna3-2"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12"value="<?php echo ($_SESSION['telefone_at']); ?>">
						<input class="coluna3-3"type="email" name="email" placeholder="E-mail aquí"value="<?php echo ($_SESSION['email_at']); ?>" >

						</fieldset>

				</div>


				<div id="DadosCargo">
							<fieldset class="fieldset"><legend>Dados Cargo</legend>

							<input class="coluna1-1"type="text" name="cargo"placeholder="Cargo aquí"value="<?php echo ($_SESSION['cargo_at']); ?>">
							<input class="coluna2-1"type="text" name="salario"placeholder="Salário aquí"value="<?php echo ($_SESSION['salario_at']); ?>">
							<input class="coluna3-1"type="text" name="dtadmissao"placeholder="Data Admissão aquí"value="<?php echo ($_SESSION['dt_admissao_at']); ?>">

							</fieldset>

				</div>



				<div id="Endereco">
							<fieldset class="fieldset"><legend>Endereço</legend>

							<input class="coluna1-1"type="text" name="cep"placeholder="CEP aquí"value="<?php echo ($_SESSION['cep_at']); ?>">
							<input class="coluna1-2"type="text" name="rua"placeholder="Rua aquí"value="<?php echo ($_SESSION['rua_at']); ?>">
							<input class="coluna1-3"type="text" name="numero"placeholder="N° aquí"value="<?php echo ($_SESSION['numero_at']); ?>">
							<input class="coluna2-1"type="text" name="complemento"placeholder="Complemento aquí"value="<?php echo ($_SESSION['complemento_at']); ?>">
							<input class="coluna2-2"type="text" name="cidade"placeholder="Cidade aquí"value="<?php echo ($_SESSION['cidade_at']); ?>">
							<input class="coluna2-3"type="text" name="bairro"placeholder="Bairro aquí"value="<?php echo ($_SESSION['bairro_at']); ?>">
							<input class="coluna3-1"type="text" name="uf"placeholder="UF aquí"value="<?php echo ($_SESSION['uf_at']); ?>">

							<button type="submit" class="coluna3-3" id="salvarFucionario">Salvar</button>

							</fieldset>

				</div>



				</form>

			<?php $_SESSION['atualizafunc']=null;}
			?>



				</div>

		<div class="janela" id="ExcFuncionario">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Excluir Funcionário</p>
			<?php
			if($_SESSION['excluido']=='excluido')
			{ ?> <script>alert('Funcionário Excluido !')</script> <?php $_SESSION['excluido']=null;} ?>

			<?php
			if($_SESSION['CHECAREXCLUIR'] !='CHECAREXCLUIR'){ ?>

				<form action="buscarexcluir.php" method="POST">


			<div id="DadosPessoais">

						<select class="coluna2-1" name="slcexcluir"><option>Selecionar Funcionário</option>

							<?php
								$resultado_func="SELECT id_conta,id_access FROM Conta WHERE id_access BETWEEN 1 AND 4 ";
								$busca_idfunc=mysqli_query($conexao,$resultado_func);
								while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
								<option value="<?php echo $contador['id_conta'];?>">

									<?php
									$resultado_nome="SELECT nome,sobrenome from Usuario WHERE id_usuario='{$contador['id_conta']}'";
									$nomefunc=mysqli_query($conexao,$resultado_nome);
									$nome=mysqli_fetch_assoc($nomefunc);
									echo $nome['nome'];echo" "; echo$nome['sobrenome'];
									?>

								</option>
									<?php
									}
									?>


						</select>



			</div>


			<div id="DadosCargo">


							<label class="coluna1-1">Nome:</label> <label class="coluna2-1">CPF:</label> <label class="coluna3-1">Login:</label>


			</div>



			<div id="Endereco">

								<button class="coluna2-2"style="height: 30px;margin-top: 90px;font-weight: 600;background-color: rgb(173,255,47);cursor: pointer;transition: background-color 0.7s;">Buscar</button>

			</div>



				</form>


			<?php } ?>

			<?php if ($_SESSION['CHECAREXCLUIR']=='CHECAREXCLUIR') {
				 ?>

				 <form action="excluirfunc.php" method="POST">


	 		<div id="DadosPessoais">

	 					<select class="coluna2-1" name="slcexcluir"><option>Selecionar Funcionário</option>

	 						<?php
	 							$resultado_func="SELECT id_conta,id_access FROM Conta WHERE id_access BETWEEN 1 AND 4 ";
	 							$busca_idfunc=mysqli_query($conexao,$resultado_func);
	 							while($contador=mysqli_fetch_assoc($busca_idfunc)) {?>
	 							<option value="<?php echo $contador['id_conta'];?>">

	 								<?php
	 								$resultado_nome="SELECT nome,sobrenome from Usuario WHERE id_usuario='{$contador['id_conta']}'";
	 								$nomefunc=mysqli_query($conexao,$resultado_nome);
	 								$nome=mysqli_fetch_assoc($nomefunc);
	 								echo $nome['nome'];echo" "; echo$nome['sobrenome'];
	 								?>

	 							</option>
	 								<?php
	 								}
	 								?>


	 					</select>



	 		</div>


	 		<div id="DadosCargo">


	 						<label class="coluna1-1">Nome: <?php echo ($_SESSION['excluinome']); ?></label> <label class="coluna2-1">CPF: <?php echo ($_SESSION['excluicpf']);   ?></label> <label class="coluna3-1"> Login: <?php echo ($_SESSION['excluilogin']);   ?></label>


	 		</div>



	 		<div id="Endereco">

	 							<button class="coluna2-2"style="height: 30px;margin-top: 90px;font-weight: 600;background-color: rgb(173,255,47);cursor: pointer;transition: background-color 0.7s;">Deletar</button>

	 		</div>



	 			</form>


			<?php $_SESSION['CHECAREXCLUIR']=null;} ?>





			</div>



		<!--    /\JANELAS Funcionario/\-->
		<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
		<!--     \/JANELAS Cardapio\/     -->



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
					<form action="cardapiophp/atualizarcard.php" method="POST"style="width:100%;height: 100px;margin-bottom:2px;">
						<div class="carditens">

							<input type="text"name="id_item" style="display:none;" value="<?php echo $contador['id_item']; ?>">
							<input type="text"name="id_imagem" style="display:none;" value="<?php echo $contador['id_imagem']; ?>">



							<img src="../img/CardapioIMG/<?php echo $contador['id_imagem'];?>" >

							<input class="coluna1" type="text" name="nome" value="<?php echo $contador['nome'];?>">
							<input type="text" name="valor" value="<?php echo $contador['valor'];?>">
							<textarea name="descricao" rows="8" cols="80" value="<?php echo $contador['descricao'];?>"></textarea>

							<input type="submit"  value="Excluir" style="right:5px;bottom:5px;position:absolute;">

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


		<!--    /\ JANELAS Cardapio /\    -->
		<!--  !!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
		<!--     \/JANELA Historico\/     -->

		<div class="janela" id="BusHistorico">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Histórico</p>
				<form action="exemplo.php" method="POST">




			<div id="DadosPessoais">


						<label for="datainicio" style="margin-left: 60px;">Início</label>
						<input type="date" name="datainicio" class=" coluna1-1"id="datainicio" >

						<label for="datafim" style="margin-left:190px;">Fim</label>
						<input type="date" name="datafim" class=" coluna2-1"id="datafim" >

						<button type="submit" class="coluna3-1" id="buscafuncionario">Buscar</button>



			</div>


			<div id="DadosCargo">





			</div>



			<div id="Endereco">




			</div>



				</form>

			</div>


		<!--     /\JANELA Historico/\     -->
		<!--  !!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
		<!--     \/JANELA Cal.Lucro\/     -->


		<div class="janela" id="Cal-Lucro">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Calcular Lucro</p>

				<form action="exemplo.php" method="POST">


			<div id="DadosPessoais">

				<label for="datainiciocalc" style="margin-left: 60px;">Início</label>
				<label for="datafimcalc" style="margin-left:190px;">Fim</label>

				<input type="date" name="datainiciocalc" class="coluna1-1">
				<input type="date" name="datafimcalc" class="coluna2-1">
				<button type="submit" class="coluna3-1" id="buscafuncionario">Calcular</button>


			</div>


			<div id="DadosCargo">


			</div>



			<div id="Endereco">


			</div>



				</form>

			</div>

		<!--     /\JANELA Cal.Lucro/\     -->

		</div>



	<div id="painel">

		<div id="boasvindas">
		<label>Bem Vindo(a),<?php echo($_SESSION['nome']); ?> !</label>
		</div>
		<a href="logout.php">Deslogar!</a>


		<div id="menu">
			<ul>

				<li><label class="itemmenu"for="itemFuncionario" id="menuFuncionario">Funcionário</label></li>

					<ul class="submenu" id="sub1">
						<li><label class="itemmenu2"for="CFuncionario">Cadastrar</label></li>
						<li><label class="itemmenu2"for="RFuncionario">Buscar</label></li>
						<li><label class="itemmenu2"for="UFuncionario">Atualizar</label></li>
						<li><label class="itemmenu2"for="DFuncionario">Deletar</label></li>
					</ul>


				<li><label class="itemmenu"for="itemCardapio"id="menuCardapio">Cardápio</label></li>

					<ul class="submenu" id="sub2">
						<li><label class="itemmenu2"for="CCardapio">Cadastrar</label></li>
						<li><label class="itemmenu2"for="RCardapio">Visualizar</label></li>
						<li><label class="itemmenu2"for="UCardapio">Atualizar</label></li>
						<li><label class="itemmenu2"for="DCardapio">Deletar</label></li>
					</ul>


				<li><label class="itemmenu"for="itemHistorico"id="menuHistorico">Histórico</label></li>
				<li><label class="itemmenu"for="itemCalc-Lucro"id="menuCalc-Lucro">Calc.Lucro</label></li>

			</ul>


		</div>




	</div>

</div>




<div id="final">

	&#169; 2021 Healthy Food

</div>



</body>
</html>
