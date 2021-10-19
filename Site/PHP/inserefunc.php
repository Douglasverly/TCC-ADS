<?php 
include('../PHP/controle/DAOclass.php');
include('../PHP/controle/ClassesSistema.php');





$f1=new funcionario;

$id_usuario=$_POST['cpf'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$dt_nasc=$_POST['datanasc'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$dt_admissao=$_POST['dtadmissao'];
$id_cargo=$_POST['selectcargo'];

$f1->setid_usuario($id_usuario);
$f1->setnome($nome);
$f1->setsobrenome($sobrenome);
$f1->setdt_nasc($dt_nasc);
$f1->setsexo($sexo);
$f1->settelefone($telefone);
$f1->setemail($email);
$f1->setdt_admissao($dt_admissao);
$f1->setid_cargo($id_cargo);

$insere=new crudfunc;
$insere->inserir();


?>

