<?php
include('../verificarlogin.php');
require_once('../ClassesSistema.php');

$id_usuario=$_POST['cpf'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$dt_nasc=$_POST['datanasc'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$id_cargo='CLT-01';

$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$uf=$_POST['uf'];

$login=$_POST['login'];
$senha=$_POST['senha'];

$id_access=4;


$at1=new Cliente();


$at1->setid_usuario($id_usuario);
$at1->setnome($nome);
$at1->setsobrenome($sobrenome);
$at1->setdt_nasc($dt_nasc);
$at1->setsexo($sexo);
$at1->settelefone($telefone);
$at1->setemail($email);
$at1->setid_cargo($id_cargo);

$at1->inserecliente();

$e1=new Endereco;

$e1->setcep($cep);
$e1->setrua($rua);
$e1->setnumero($numero);
$e1->setcomplemento($complemento);
$e1->setbairro($bairro);
$e1->setcidade($cidade);
$e1->setuf($uf);

$e1->inserirend($id_usuario);

if($id_cargo=='ADM-01'){
    $id_access=1;
}
if($id_cargo=='ATD-01'){
    $id_access=2;
}
if($id_cargo=='ENT-01'){
    $id_access=3;
}

if($id_cargo=='CLT-01'){
    $id_access=4;
}


$c1=new Conta;
$c1->setidconta($id_usuario);
$c1->setlogin($login);
$c1->setsenha($senha);
$c1->setidaccess($id_access);
$c1->inserirconta();

$_SESSION['inserecli']='inserido';

header('Location: ../painelatd.php');


?>