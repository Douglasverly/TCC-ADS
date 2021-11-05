<?php
include('../conexao.php');
date_default_timezone_set('America/Sao_Paulo');
session_start();
$formadepagamento=$_POST['formadepagamento'];
$valortotal=$_POST['valortotal'];

if ($_POST['valortroco']=="") {
$valortroco=0;
}else {
$valortroco=$_POST['valortroco'];
}

$endereco=$_POST['endereco'];

$teste="teste";
$teste2="teste2";
$teste3="teste3";
$teste4="teste4";

$descricao="";
foreach ($_SESSION['produto'] as $key => $conteudo){
    $descricao=$descricao.$conteudo['nome']."  QTDE= ".$conteudo['qtd']."  Valor= ".$conteudo['valor']*$conteudo['qtd']." |";
}

$data= date('d/m/Y');

$SQL="INSERT INTO Pedido(id_conta,descricao,valor_total,data,situacao,form_pag,troco) VALUES('{$_SESSION['id_usuario']}','{$descricao}','{$valortotal}',STR_TO_DATE('{$data}','%d/%m/%Y'),'Pendente','{$formadepagamento}',{$valortroco})";


mysqli_query($conexao,$SQL);


$erro=mysqli_error($conexao);

if($erro==null){
    header('Location:limparcarrinho.php');
    $_SESSION['pedidoinserido']="valido";

}
else{
    header('Location:limparcarrinho.php');
    $_SESSION['pedidoinserido']="erro";}



 ?>
