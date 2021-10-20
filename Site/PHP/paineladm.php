<?php
session_start();
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
<input class="botaocontrole"type="radio" name="menu1" id="RFuncionario">
<input class="botaocontrole"type="radio" name="menu1" id="UFuncionario">
<input class="botaocontrole"type="radio" name="menu1" id="DFuncionario">


<input class="botaocontrole"type="radio" name="menu1" id="CCardapio">
<input class="botaocontrole"type="radio" name="menu1" id="RCardapio">
<input class="botaocontrole"type="radio" name="menu1" id="UCardapio">
<input class="botaocontrole"type="radio" name="menu1" id="DCardapio">





<div id="topo">
		<div id="logo"></div>
</div>



<div class="central">
	

	<div id="conteudo">

		<div class="janela" id="CadFuncionario">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Cadastrar Funcionário</p>
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
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais">
						<fieldset class="fieldset"><legend>Dados Pessoais</legend>
							<select class="coluna1-1" style="cursor:pointer;">
								<option>Selecione o Funcionário</option>
							</select>
							<label id="buscanome"class="coluna1-2">Nome:</label>
							<label id="buscasobrenome"class="coluna1-3">Sobrenome:</label>

							<button type="submit" id="buscafuncionario" class="coluna2-1">Buscar</button>

							<label id="buscacpf"class="coluna2-2">CPF:</label>
							<label id="buscadata"class="coluna2-3">Nasc:</label>
							<label id="buscatelefone"class="coluna3-1">Tel:</label>
							<label id="buscaemail"class="coluna3-2">E-mail:</label>
							<label id="buscalogin"class="coluna3-3">Login:</label>

						</fieldset>

			</div>

					
			<div id="DadosCargo">
							<fieldset class="fieldset"><legend>Dados Cargo</legend>

								<label class="coluna1-1">Cargo:</label>
								<label class="coluna2-1">Salário:</label>
								<label class="coluna3-1">Data de Admissão:</label>


							</fieldset>

			</div>
					
					
			<div id="Endereco">
							<fieldset class="fieldset"><legend>Endereço</legend>

								<label class="coluna1-1">Login:</label>
								<label class="coluna1-2">Login:</label>
								<label class="coluna1-3">Login:</label>
								<label class="coluna2-1">Login:</label>
								<label class="coluna2-2">Login:</label>
								<label class="coluna2-3">Login:</label>
								<label class="coluna3-1">Login:</label>

							</fieldset>

			</div>
					


				</form>

			</div>	

		

		<div class="janela" id="AtuFuncionario">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Atualizar Funcionário</p>
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais">
						<fieldset class="fieldset"><legend>Dados Pessoais</legend>

						<select class="coluna1-1"><option>Selecionar Funcionário</option></select>

						<a class="coluna2-1" id="buscafuncionario" href="testar.php" style="font-size: 13px;">Buscar</a>

						<input class="coluna1-2" type="text" name="nome" placeholder="Nome aquí" maxlength="10">
						<input class="coluna1-3"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20">
						<input class="coluna2-2"type="text" name="cpf" placeholder="CPF aquí" maxlength="11">
						<input class="coluna2-3"type="text" name="datanasc" placeholder="Data de Nascimento aquí">
						<input class="coluna3-2"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12">
						<input class="coluna3-3"type="email" name="email" placeholder="E-mail aquí" >

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

			</div>	


		<div class="janela" id="ExcFuncionario">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Excluir Funcionário</p>
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais">

						<select class="coluna2-1"><option>Selecionar Funcionário</option></select>

						

			</div>

					
			<div id="DadosCargo">
							
							
							<label class="coluna1-1">Nome:</label> <label class="coluna2-1">CPF:</label> <label class="coluna3-1">Cargo:</label>
							

			</div>
					

					
			<div id="Endereco">
							
							<button class="coluna2-1"style="height: 30px;margin-top: 90px;font-weight: 600;background-color: rgb(173,255,47);cursor: pointer;transition: background-color 0.7s;">Deletar</button>

			</div>
					


				</form>

			</div>	



		<!--    /\JANELAS Funcionario/\-->	
		<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
		<!--     \/JANELAS Cardapio\/     -->



		<div class="janela" id="CadCardapio">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Cadastrar Item Cardápio</p>
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais">
						

						<input class="coluna1-2" type="text" name="codigoitem" placeholder="Código aquí" maxlength="10">
						<input class="coluna2-2"type="text" name="nomeitem" placeholder="Nome aquí" maxlength="20">
						<input class="coluna3-2"type="text" name="valor" placeholder="Valor aquí" minlength="30"maxlength="250">
						<input class="coluna1-3"type="text" name="descricao" placeholder="Descrição aquí">
						<input class="coluna2-3"type="text" name="imagemnome"placeholder="nome da imagem aquí">
						<input class="coluna3-3"type="FILE" name="imagem" style="border: none;">

						

			</div>

					
			<div id="DadosCargo">

							<button type="submit" class="coluna2-1" id="buscafuncionario">Salvar</button>

							

			</div>
					

					
			<div id="Endereco">
					
							
							


			</div>
					


				</form>

			</div>

		<div class="janela" id="BusCardapio">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Buscar Item Cardápio</p>
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais">
						
						<label for="selectcardapio" style="margin-left: 70px;">Início</label>
						<select id="selectcardapio" class=" coluna1-1"><option >selecionar item</option>
								<option>Todos os Itens</option>
						</select>


						<button type="submit" class="coluna3-1" id="buscafuncionario">Buscar</button>

			</div>

					
			<div id="DadosCargo">
							

			</div>
					

					
			<div id="Endereco">
							

			</div>
					


				</form>

			</div>	

		<div class="janela" id="AtuCardapio">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Atualizar Item Cardápio</p>
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais"style="margin-top: 100px;">

						<select id="selectcardapio" class=" coluna1-1"><option >selecionar item</option>
						</select>
						<button class=" coluna2-1" id="buscafuncionario">Buscar</button>
						<button class=" coluna3-1" id="buscafuncionario">Salvar</button>

						<input class="coluna1-2"type="text" name="nomeitem" placeholder="Nome aquí" maxlength="20">
						<input class="coluna2-2"type="text" name="valor" placeholder="Valor aquí" minlength="30"maxlength="250">
						<input class="coluna3-2"type="text" name="descricao" placeholder="Descrição aquí">
						<input class="coluna1-3"type="text" name="imagemnome"placeholder="nome da imagem aquí">
						<input class="coluna2-3"type="FILE" name="imagem" style="border: none;">

			</div>

					
			<div id="DadosCargo">
							
			</div>
					

					
			<div id="Endereco">
							
			</div>
					


				</form>

			</div>	

		<div class="janela" id="ExcCardapio">
			<div class="bordatop"><label for="default">X</label></div>
			<p>Excluir Item Cardápio</p>
				<form action="exemplo.php" method="POST">

					
			<div id="DadosPessoais">
						<input type="text" name="idcardapio" class=" coluna2-1" placeholder="Código do Item">
						<button id="salvarFucionario" class=" coluna2-3">Buscar</button>

			</div>

					
			<div id="DadosCargo">
							
					<label class="coluna1-1">Codigo:</label> <label class="coluna2-1">Nome:</label> <label class="coluna3-1">Valor:</label>

			</div>
					

					
			<div id="Endereco">
							
							<button id="salvarFucionario" class="coluna2-2">Excluir</button>

			</div>
					


				</form>

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
		<label>Bem Vindo(a),<?php echo($_SESSION['nome']) ?> !</label>
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
						<li><label class="itemmenu2"for="RCardapio">Buscar</label></li>
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
	 
	&#169; 2021 Helf Food

</div>



</body>
</html>





























<!-- <h2>Bem Vindo,  <?php // echo $_SESSION['nome']; ?> </h2>
<h2><a href="logout.php">Sair</a></h2>  -->
