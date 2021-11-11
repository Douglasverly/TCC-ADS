<?php
session_start();


$id_usuario=$_POST['selectusuario'];


$_SESSION['CLIENTEIDBUS']=$id_usuario;
$_SESSION['buscacliente']='valida';
header('Location:../painelatd.php');

 ?>
