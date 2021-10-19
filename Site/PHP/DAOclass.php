<?php
class crudfunc{
            

            public function inserir(){
                require_once('conexao.php');

                $SQL="INSERT INTO Usuario (id_usuario,nome,sobrenome,dt_nasc,sexo,telefone,email,dt_admissao,id_cargo)
                values('{$id_usuario}',
                '{$nome}',
                '{$sobrenome}',
                '{$dt_nasc}',
                '{$sexo}',
                '{$telefone}',
                '{$email}',
                '{$dt_admissao}',
                '{$id_cargo}')";




               //  mysqli_query($conexao,$SQL) or die ("Erro ao Cadastrar  ".mysqli_error($conexao));
              //   mysqli_close($conexao);
                
                

                echo $dt_nasc;
            }





}


?>