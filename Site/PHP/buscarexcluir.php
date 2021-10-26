<?php
session_start();

include('conexao.php');
include('verificarlogin.php');

$id_usuario=$_POST['slcexcluir'];


$SQL="SELECT Usuario.nome, Usuario.id_usuario, Conta.login
FROM Usuario, Conta
WHERE Usuario.id_usuario='{$id_usuario}' and Conta.id_conta='{$id_usuario}'";


$result=mysqli_query($conexao,$SQL);
$resultado=mysqli_fetch_assoc($result);
$_SESSION['excluinome']=$resultado['nome'];
$_SESSION['excluicpf']=$resultado['id_usuario'];
$_SESSION['excluilogin']=$resultado['login'];

$_SESSION['CHECAREXCLUIR']="CHECAREXCLUIR";
$_SESSION['excluirid']=$id_usuario;

header('Location:paineladm.php');
 ?>
