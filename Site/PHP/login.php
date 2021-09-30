<?php
session_start();
include('conexao.php');
 if(empty($_POST['login']) || empty($_POST['senha'])){
     header('Location: ../index.php');
     exit();
 }

$login = mysqli_real_escape_string($conexao,$_POST['login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$query="select id_access,nome from Contas where login='{$login}' and senha=md5('{$senha}')";
$querynome="select nome from Contas where login='{$login}' and senha=md5('{$senha}')";
$queryid_access="select id_access from Contas where login='{$login}' and senha=md5('{$senha}')";


$resultado=mysqli_query($conexao,$query);
$validacao=mysqli_num_rows($resultado);

$dados=mysqli_fetch_assoc($resultado);

if(($validacao == 1) && ($dados['id_access'] == 1))
{
$_SESSION['nome']=$dados['nome'];
 header('Location: ../PHP/paineladm.php');
 exit();
}
if(($validacao == 1) && ($dados['id_access']==2))
{
    $_SESSION['nome']=$dados['nome'];
 header('Location: ../PHP/paineladm.php');
 exit();
}
if(($validacao == 1) && ($dados['id_access']==3))
{
    $_SESSION['nome']=$dados['nome'];
 header('Location: ../PHP/painel.php');
 exit();
}

else{
    header('Location: ../index.php');
    exit();
}
