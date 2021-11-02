<?php
session_start();
include('conexao.php');
 if(empty($_POST['login']) || empty($_POST['senha'])){
     header('Location: ../index.php');
     exit();
 }

$login = mysqli_real_escape_string($conexao,$_POST['login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query="SELECT id_access,id_conta from Conta where login='{$login}' and senha=md5('{$senha}')";

$queryusuario="SELECT id_usuario from Conta where login='{$login}'and senha=md5('{$senha}')";


$queryid_access="SELECT id_access from Conta where login='{$login}' and senha=md5('{$senha}')";

$resultado=mysqli_query($conexao,$query);
$validacao=mysqli_num_rows($resultado);

$dados=mysqli_fetch_assoc($resultado);

$usuario=$dados['id_conta'];

$querynome="SELECT  nome,sobrenome from Usuario where id_usuario='{$usuario}'";

$nomecheck=mysqli_query($conexao,$querynome);

$nome=mysqli_fetch_assoc($nomecheck);


if(($validacao == 1) && ($dados['id_access'] == 1))
{
$_SESSION['nome']=$nome['nome'];
 header('Location: ../PHP/paineladm.php');
 exit();
}
if(($validacao == 1) && ($dados['id_access']==2))
{
    $_SESSION['nome']=$nome['nome'];
 header('Location: ../PHP/painelatd.php');
 exit();
}
if(($validacao == 1) && ($dados['id_access']==3))
{
    $_SESSION['nome']=$nome['nome'];
 header('Location: ../PHP/painel.php');
 exit();
}

if(($validacao == 1) && ($dados['id_access']==4))
{
    $_SESSION['nome']=$nome['nome'];
 header('Location: ../PHP/cliente/telacliente.php');
 exit();
}


if($validacao != 1){
    $_SESSION['erro_login']="sim";
    header('Location: ../index.php');
    exit();
}
