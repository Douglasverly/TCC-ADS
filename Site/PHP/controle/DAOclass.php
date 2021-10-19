<?php

class crudfunc{
            

            public function inserir(){
                include('../conexao.php');
                include('../controle/ClassesSistema.php');

                $f1=new funcionario;


                $id_usuario= $f1->getid_usuario();
                $nome=$f1->getnome();
                $sobrenome=$f1->getsobrenome();
                $dt_nasc=$f1->getdt_nasc();
                $sexo=$f1->getsexo();
                $telefone=$f1->gettelefone();
                $email=$f1->getemail();
                $dt_admissao=$f1->getdt_admissao();
                $id_cargo=$f1->getid_cargo();


            
                $SQL="INSERT INTO Usuario (id_usuario,nome,sobrenome,dt_nasc,sexo,telefone,email,dt_admissao,id_cargo)
                values('{$id_usuario}',
                '{$nome}',
                '{$sobrenome}',
                'str_to_date('{$dt_nasc}','%d/%m/%y')',
                '{$sexo}',
                '{$telefone}',
                '{$email}',
                'str_to_date('{$dt_admissao}','%d/%m/%y')',
                '{$id_cargo}')";
                 mysqli_query($conexao,$SQL) or die ("Erro ao Cadastrar".mysqli_error($conexao));
                 mysqli_close($conexao);
                echo("inserido com sucesso");
            }





}


?>