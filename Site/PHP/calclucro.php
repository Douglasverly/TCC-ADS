<?php
session_start();
include('conexao.php');

$datainicio=$_POST['datainiciocalc'];
$datafim=$_POST['datafimcalc'];
$SQL="SELECT sum(valor),id_pedido FROM Historico WHERE dt_pedido between STR_TO_DATE('{$datainicio}','%Y-%m-%d') AND STR_TO_DATE ('{$datafim}','%Y-%m-%d')";
$resultado=mysqli_query($conexao,$SQL);

$lucro=mysqli_fetch_assoc($resultado);

$_SESSION['lucro']=$lucro['sum(valor)'];
$_SESSION['VERIFICALUCRO']='sim';
header('Location:paineladm.php');

 ?>
