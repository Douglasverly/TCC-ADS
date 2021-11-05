<?php

	session_start();

	unset($_SESSION['carrinho']);
	unset($_SESSION['produto']);

	header('Location:telacliente.php');


  ?>
