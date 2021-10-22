<?php
session_start();


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



$_SESSION['nomefunc']=$resultadousuario['nome'];
$_SESSION['sobrenome']=$resultadousuario['sobrenome'];;
$_SESSION['cpf']=$resultadousuario['id_usuario'];;
$_SESSION['dt_nasc']=$resultadousuario['dt_nasc'];;
$_SESSION['telefone']=$resultadousuario['telefone'];;
$_SESSION['email']=$resultadousuario['email'];;
$_SESSION['login']=$resultadoconta['login'];
$_SESSION['cargo']=$resultadocargo['nome'];
$_SESSION['salario']=$resultadocargo['salario'];
$_SESSION['dt_admissao']=$resultadousuario['dt_admissao'];
$_SESSION['cep']=$resultadoendereco['cep'];
$_SESSION['rua']=$resultadoendereco['rua'];
$_SESSION['numero']=$resultadoendereco['numero'];
$_SESSION['complemento']=$resultadoendereco['complemento'];
$_SESSION['cidade']=$resultadoendereco['cidade'];
$_SESSION['bairro']=$resultadoendereco['bairro'];
$_SESSION['uf']=$resultadoendereco['uf'];


$_SESSION['checabusca']= true;


header('Location: paineladm.php');







?>