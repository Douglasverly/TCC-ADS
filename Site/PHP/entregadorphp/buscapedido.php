<?php
include('../conexao.php');
session_start();

if (!empty($_POST['idpedido'])) {

$id_pedido=$_POST['idpedido'];

$sqlconta="SELECT id_conta,id_pedido,situacao from pedido Where id_pedido='{$id_pedido}'";
$resultaconta=mysqli_query($conexao,$sqlconta);
$conta=mysqli_fetch_assoc($resultaconta);

$_SESSION['situacao']=$conta['situacao'];

$SQL="SELECT nome,sobrenome,telefone FROM usuario Where id_usuario='{$conta['id_conta']}'";
$resultado=mysqli_query($conexao,$SQL);
$varrer=mysqli_fetch_assoc($resultado);


$_SESSION['nomepedido']=$varrer['nome'];
$_SESSION['sobrenomepedido']=$varrer['sobrenome'];
$_SESSION['telefonepedido']=$varrer['telefone'];
$_SESSION['id_pedido']=$id_pedido;


 $SQLENDERECO="SELECT *FROM endereco where id_usuario='{$conta['id_conta']}'";
      $resultaendereco=mysqli_query($conexao,$SQLENDERECO);
      $varrerendereco=mysqli_fetch_assoc($resultaendereco);

$_SESSION['rua']=$varrerendereco['rua'];
$_SESSION['numero']=$varrerendereco['numero'];
$_SESSION['complemento']=$varrerendereco['complemento'];
$_SESSION['bairro']=$varrerendereco['bairro'];
$_SESSION['cidade']=$varrerendereco['cidade'];
$_SESSION['cep']=$varrerendereco['cep'];





header('Location:telaentregador.php');
}

 ?>
