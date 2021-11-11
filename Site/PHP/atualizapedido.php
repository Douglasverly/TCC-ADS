<?php
include('conexao.php');
$idpedido=$_POST['id_pedido'];
$situacao=$_POST['situacao'];


$SQL="UPDATE Pedido set situacao='{$situacao}'WHERE id_pedido = '{$idpedido}'";

mysqli_query($conexao,$SQL);
$erro=mysqli_error($conexao);

echo $erro;

if($erro==""){

header('Location:painelatd.php');

}else{echo $erro;}


?>