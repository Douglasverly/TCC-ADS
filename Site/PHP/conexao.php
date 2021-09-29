<?php
define('HOST','host_aqui');
define('USUARIO','user_aqui');
define('SENHA','senha_aqui');
define('BD','banco_aqui');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,BD) or die('Erro ao conectar ao banco');