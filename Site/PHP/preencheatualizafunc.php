<?php
session_start();
include('verificarlogin.php');


    $id_usuario=$_POST['selectusuario'];


	include('conexao.php');
	$SQL="SELECT *FROM Usuario WHERE id_usuario='{$id_usuario}'";
	$result_usuario=mysqli_query($conexao,$SQL);
	$resultadousuario=mysqli_fetch_assoc($result_usuario);

	$SQL2="SELECT *FROM Endereco WHERE id_usuario='{$id_usuario}'";
	$result_endereco=mysqli_query($conexao,$SQL2);
	$resultadoendereco=mysqli_fetch_assoc($result_endereco);



	$SQL3="SELECT *FROM Conta WHERE id_conta='{$id_usuario}'";
	$result_conta=mysqli_query($conexao,$SQL3);
	$resultadoconta=mysqli_fetch_assoc($result_conta);


    $idcargo=$resultadousuario['id_cargo'];


    $SQL4="SELECT *FROM Cargo WHERE id_cargo='{$idcargo}'";
	$result_cargo=mysqli_query($conexao,$SQL4);
	$resultadocargo=mysqli_fetch_assoc($result_cargo);



$_SESSION['nomefunc_at']=$resultadousuario['nome'];
$_SESSION['sobrenome_at']=$resultadousuario['sobrenome'];
$_SESSION['cpf_at']=$resultadousuario['id_usuario'];
$_SESSION['dt_nasc_at']=$resultadousuario['dt_nasc'];
$_SESSION['telefone_at']=$resultadousuario['telefone'];
$_SESSION['email_at']=$resultadousuario['email'];
$_SESSION['login_at']=$resultadoconta['login'];
$_SESSION['cargo_at']=$resultadocargo['nome'];
$_SESSION['salario_at']=$resultadocargo['salario'];
$_SESSION['dt_admissao_at']=$resultadousuario['dt_admissao'];
$_SESSION['cep_at']=$resultadoendereco['cep'];
$_SESSION['rua_at']=$resultadoendereco['rua'];
$_SESSION['numero_at']=$resultadoendereco['numero'];
$_SESSION['complemento_at']=$resultadoendereco['complemento'];
$_SESSION['cidade_at']=$resultadoendereco['cidade'];
$_SESSION['bairro_at']=$resultadoendereco['bairro'];
$_SESSION['uf_at']=$resultadoendereco['uf'];


$_SESSION['atualizafunc']= 'atualizafunc';





header('Location: paineladm.php');







?>
