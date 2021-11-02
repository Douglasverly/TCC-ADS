<?php $dados=filter_input_array(INPUT_POST,FILTER_DEFAULT); ?>


<html>
<head lang="pt-br">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta charset="utf-8">
	<title>Healthy Food</title>
	<link rel="stylesheet" type="text/css" href="../../CSS/estilo.css">
</head>
<body>


<div id="topo">
	<div id="logo"></div>
</div>



<div id="centro">

	<div id="cintro">


      <form method="post" action="cadastracliente.php"style="height:100%;width:90%;">

        <fieldset style="margin-top:50px;height:40%;position:relative;width:100%;border:2px solid greenyellow;">
          <legend>Dados Pessoais</legend>

        <input class="barra1"type="text" name="nome" placeholder="Nome aqui"style="position:absolute;left:10%;top:10%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra1"type="text" name="sobrenome" placeholder="Sobrenome aqui"style="position:absolute;left:10%;top:50%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra1"type="text" name="datanasc" placeholder="Data de Nascimento aqui"style="position:absolute;left:10%;top:90%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra2"type="text" name="sexo" placeholder="Sexo aqui"style="position:absolute;left:50%;top:10%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra2"type="text" name="cpf" placeholder=" CPF aqui"style="position:absolute;left:50%;top:50%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra2"type="text" name="telefone"placeholder="Telefone aqui"style="position:absolute;left:50%;top:90%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra3"type="text" name="email" placeholder="E-mail aqui"style="position:absolute;left:90%;top:10%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">

        <input class="barra3"type="text" name="login" placeholder="Login aqui"style="position:absolute;left:90%;top:50%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input class="barra3"type="text" name="senha" placeholder="Senha aqui"style="position:absolute;left:90%;top:90%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">

      </fieldset>

      <fieldset style="margin-top:20px;height:40%;position:relative;width:100%;border:2px solid greenyellow;">
        <legend>Endereço</legend>
        <input type="text" name="rua" placeholder="rua aqui"style="position:absolute;left:10%;top:10%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="text" name="numero" placeholder="N°aqui"style="position:absolute;left:10%;top:50%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="text" name="cidade" placeholder="Cidade aqui"style="position:absolute;left:10%;top:90%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="text" name="bairro" placeholder="bairro aqui"style="position:absolute;left:50%;top:10%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="text" name="cep" placeholder="CEP aqui"style="position:absolute;left:50%;top:50%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="text" name="uf" placeholder="UF aqui"style="position:absolute;left:50%;top:90%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="text" name="complemento" placeholder="Complemento aqui"style="position:absolute;left:90%;top:10%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
        <input type="submit" value="Cadastrar"name="cadastrar"style="position:absolute;left:90%;top:50%;transform: translate(-50%,-50%);width:120px;border:none;border-bottom:2px solid greenyellow;text-align:center;">
      </fieldset>


      </form>
  </div>


</div>

<div id="final">

	<a href="#">Local de Cobertura</a> <a href="#">Endereço</a> <a href="#"> Whatsapp</a>
	&#169; 2021 Healthy Food

</div>

</body>

</html>
