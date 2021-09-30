<?php
define('HOST','db4free.net');
define('USUARIO','tccads');
define('SENHA','TCCads1234!');
define('BD','tcc_ads');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,BD) or die('Erro ao conectar ao banco');
