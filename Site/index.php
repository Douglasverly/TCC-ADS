<?php
error_reporting(0);

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta charset="utf-8">
	<title>Healthy Food</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
	 
	<input type="checkbox" class="check" id="user" <?php if($_SESSION['erro_login']=="sim") {?> checked <?PHP } ?>> 
	

	<input type="radio" class="check" name="select" id="Inicio">
	<input type="radio" class="check" name="select" id="Cardapio">
	<input type="radio" class="check" name="select" id="Contato">


<div id="topo">
	<div id="logo"></div>
</div>	

<nav id="menu">
	<ul >
		<li><label for="Inicio" id="inicioLB" >Início</label></li>
		<li><label for="Cardapio"id="cardapioLB" >Cardápio</label></li>
		<li><label for="Contato"id="contatoLB" >Contato</label></li>
		<li><label for="user" id="userlogo">Entrar</label></li>
	</ul>

</nav>
<div id="centro">

	<div id="cintro">
		<div id="logindiv">
			<label for="user"id="closelog">X</label>
				<div id="loginform">
					<div id="minilogo"></div>
					<?php if($_SESSION['erro_login']!= FALSE) {?> <p style="color: red;font-weight:800;">Login ou Senha Incorretos!</p> <?PHP } session_destroy();?>
					<form action="../Site/PHP/login.php" method="post">
					
						<label for="">Usuário</label>
						<input type="text" name="login" id="login"maxlength="15" required="true">
						<label for="">Senha</label>
						<input type="password" name="senha" id="senha"maxlength="15"required="true">
						<button type="submit">Entrar</button>

					</form>
					<p>ainda não possui cadastro?clique <a href="#">aqui</a></p>

				</div>
		</div>
		
		<div id="contatodiv">
			<p> &nbsp; Se desejar entrar em contato conosco para sanar alguma dúvida você tem as seguintes opções:</p>

			<label >Telefone: (21)xxxx-xxxx</label>	
			<label >Whatsapp: (21)xxxxx-xxxx</label>
			<label >E-mail: contato@healthyfood.com</label>

			<p> &nbsp; Lembrando que o contato deve-rá ser feito no horário comercial pelo telefone ou deixe uma mensagem no Whatsapp ou E-mail que entraremos em contato assim que possível.</p>

		</div>

	</div>

</div>

<div id="final">
	

	<a href="#">Local de Cobertura</a> <a href="#">Endereço</a> <a href="#"> Whatsapp</a> 
	&#169; 2021 Helf Food

</div>
</body>

</html>
