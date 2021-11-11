<?php
session_start();
include('conexao.php');

$datainicio=$_POST['datainiciocalc'];
$datafim=$_POST['datafimcalc'];
echo $_POST['gastos'];

if (empty($_POST['gastos'])){
$gastos=00;
}

else {
$gastos=$_POST['gastos'];
}

$SQL="SELECT sum(valor),id_pedido FROM Historico WHERE dt_pedido between STR_TO_DATE('{$datainicio}','%Y-%m-%d') AND STR_TO_DATE ('{$datafim}','%Y-%m-%d')";
$resultado=mysqli_query($conexao,$SQL);

$lucro=mysqli_fetch_assoc($resultado);

$_SESSION['vendas']=$lucro['sum(valor)'];

$_SESSION['VERIFICALUCRO']='sim';

$resultadolucro=$lucro['sum(valor)']-$gastos;
$_SESSION['gastos']="Gastos R$ ".$gastos;

$_SESSION['lucro']=$resultadolucro;

header('Location:paineladm.php');

 ?>
