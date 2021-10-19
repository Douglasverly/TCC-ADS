<?php 
require_once('DAOclass.php');
require_once('ClassesSistema.php');

$id_usuario=$_POST['cpf'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$dt_nasc=$_POST['datanasc'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$dt_admissao=$_POST['dtadmissao'];
$id_cargo=$_POST['selectcargo'];

$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$uf=$_POST['uf'];









$f1=new Funcionario();

$f1->setid_usuario($id_usuario);
$f1->setnome($nome);
$f1->setsobrenome($sobrenome);
$f1->setdt_nasc($dt_nasc);
$f1->setsexo($sexo);
$f1->settelefone($telefone);
$f1->setemail($email);
$f1->setdt_admissao($dt_admissao);
$f1->setid_cargo($id_cargo);

$f1->inserirfun();


$e1=new Endereco;

$e1->setcep($cep);
$e1->setrua($rua);
$e1->setnumero($numero);
$e1->setcomplemento($complemento);
$e1->setbairro($bairro);
$e1->setcidade($cidade);
$e1->setuf($uf);

$e1->inserirend($id_usuario);


?>

