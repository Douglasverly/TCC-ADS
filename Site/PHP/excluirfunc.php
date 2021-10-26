<?php
session_start();
include('conexao.php');
include('verificarlogin.php');
$id_usuario=$_SESSION['excluirid'];

$SQL1="DELETE FROM Usuario Where id_usuario='{$id_usuario}'";
$SQL2="DELETE FROM Endereco Where id_usuario='{$id_usuario}'";
$SQL3="DELETE FROM Conta Where id_conta='{$id_usuario}'";

mysqli_query($conexao,$SQL3);
mysqli_query($conexao,$SQL2);
mysqli_query($conexao,$SQL1);
$_SESSION['excluido']='excluido';

header('Location: paineladm.php');


 ?>
