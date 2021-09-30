<?php
session_start();
include('verificarlogin.php');
?>
<h2>Bem Vindo,  <?php echo $_SESSION['nome']; ?> </h2>
<h2><a href="logout.php">Sair</a></h2>
