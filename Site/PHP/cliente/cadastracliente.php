<?php

include('../conexao.php');



$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$cpf=$_POST['cpf'];
$datanasc=$_POST['datanasc'];
$sexo=$_POST['sexo'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$login=$_POST['login'];
$senha=$_POST['senha'];

$rua=$_POST['rua'];
$numero=$_POST['numero'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$cep=$_POST['cep'];
$uf=$_POST['uf'];
$complemento=$_POST['complemento'];



      $SQL="INSERT INTO Usuario(id_usuario,nome,sobrenome,dt_nasc,sexo,telefone,email,id_cargo) values('{$cpf}','{$nome}','{$sobrenome}',STR_TO_DATE('{$datanasc}','%d/%m/%Y'),'{$sexo}','{$telefone}','{$email}','CLT-01')";
      $SQLCONTA="INSERT INTO Conta Values('{$cpf}','{$login}',md5('{$senha}'),4)";

      $SQLEndereco="INSERT INTO Endereco(id_usuario,rua,numero,cidade,bairro,cep,uf,complemento)values('{$cpf}','{$rua}','{$numero}','{$cidade}','{$bairro}','{$cep}','{$uf}','{$complemento}')";


    mysqli_query($conexao,$SQL);
    mysqli_query($conexao,$SQLCONTA);
    mysqli_query($conexao,$SQLEndereco);

    $erro=mysqli_error($conexao);
    if ($erro=='') {

    echo ("
    <script>
    window.alert('Cadastrado com Sucesso!')
    window.location.href='../../index.php'
    </script>
    ");

    }else {

      echo $erro;
  //  echo ("
  //  <script>
  //  window.alert('Erro ao Cadastrar!')
  //  window.location.href='cadastrar.php'
  //  </script>
  //  ");
    }






  ?>
