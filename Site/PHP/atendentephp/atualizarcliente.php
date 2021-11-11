<?php
session_start();


$id_usuario=$_POST['selectusuario'];


$_SESSION['CLIENTEIDAUT']=$id_usuario;
$_SESSION['atualizacliente']='valida';
header('Location:../painelatd.php');
 ?>
