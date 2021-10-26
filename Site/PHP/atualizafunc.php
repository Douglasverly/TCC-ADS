<?php
session_start();
include('verificarlogin.php');
include('conexao.php');
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$datanasc=$_POST['datanasc'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$id_usuario=$_SESSION['cpf_at'];
$cargo=$_POST['cargo'];
$salario=$_POST['salario'];
$dtadmissao=$_POST['dtadmissao'];

$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$uf=$_POST['uf'];





$SQL="UPDATE Usuario set nome='{$nome}',sobrenome='{$sobrenome}',dt_nasc='{$datanasc}',telefone='{$telefone}',email='{$email}',dt_admissao='{$dtadmissao}' where id_usuario='{$id_usuario}'";
$SQL2="UPDATE Endereco set cep='$cep',rua='$rua',numero='$numero',complemento='$complemento',cidade='$cidade',bairro='$bairro',uf='$uf' where id_usuario='$id_usuario'";



    $result=mysqli_query($conexao,$SQL);
    $result2=mysqli_query($conexao,$SQL2);

    $teste=mysqli_error($conexao);

    if($teste==""){
        $_SESSION['alerte']="certo";
        header('LOCATION: paineladm.php');
    }
    else{
        $_SESSION['alerte']="erro";
        header('LOCATION: paineladm.php');
    }









?>
