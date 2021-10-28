
<?php
include('verificarlogin.php');

class Funcionario{

    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $dt_nasc;
    private $sexo;
    private $telefone;
    private $email;
    private $dt_admissao;
    private $id_cargo;

    public function __construct()
    {

    }
    //metodos get
    public function getid_usuario(){
        return $this-> id_usuario;

    }
    public function getnome(){
        return $this-> nome;

    }
    public function getsobrenome(){
        return $this-> sobrenome;

    }
    public function getdt_nasc(){
        return $this-> dt_nasc;

    }
    public function getsexo(){
        return $this-> sexo;

    }
    public function gettelefone(){
        return $this-> telefone;

    }
    public function getemail(){
        return $this-> email;

    }
    public function getdt_admissao(){
        return $this-> dt_admissao;

    }
    public function getid_cargo(){
        return $this-> id_cargo;

    }
    //-----------------METODOS SET-----------------//
    public function setid_usuario($id_usuario){
        $this->id_usuario=$id_usuario;

    }
    public function setnome($nome){
        $this->nome=$nome;

    }
    public function setsobrenome($sobrenome){
        $this->sobrenome=$sobrenome;

    }
    public function setdt_nasc($dt_nasc){
        $this->dt_nasc=$dt_nasc;

    }
    public function setsexo($sexo){
        $this->sexo=$sexo;

    }
    public function settelefone($telefone){
        $this->telefone=$telefone;

    }
    public function setemail($email){
        $this->email=$email;

    }
    public function setdt_admissao($dt_admissao){
        $this->dt_admissao=$dt_admissao;

    }
    public function setid_cargo($id_cargo){
        $this->id_cargo=$id_cargo;

    }
    //inserir no banco

    public function inserirfun(){
     include('conexao.php');

     $id_usuario=$this->id_usuario;
     $nome=$this->nome;
     $sobrenome=$this->sobrenome;
     $dt_nasc=$this->dt_nasc;
     $sexo=$this->sexo;
     $telefone=$this->telefone;
     $email=$this->email;
     $dt_admissao=$this->dt_admissao;
     $id_cargo=$this->id_cargo;


     $SQL="INSERT INTO Usuario (id_usuario,nome,sobrenome,dt_nasc,sexo,telefone,email,dt_admissao,id_cargo)
      values('{$id_usuario}',
      '{$nome}',
      '{$sobrenome}',
      STR_TO_DATE('{$dt_nasc}','%d/%m/%Y'),
      '{$sexo}',
      '{$telefone}',
     '{$email}',
      STR_TO_DATE('{$dt_admissao}','%d/%m/%Y'),
      '{$id_cargo}')";

      mysqli_query($conexao,$SQL) or die ("Erro ao Cadastrar  ".mysqli_error($conexao));

      mysqli_close($conexao);

      echo('Inserido com Sucesso!');


    }
    public function buscarfun(){}

}


class Endereco{
    private $cep;
    private $rua;
    private $numero;
    private $complemento;
    private $cidade;
    private $bairro;
    private $uf;


    public function getcep(){return $this-> cep;}
    public function getrua(){return $this-> rua;}
    public function getnumero(){return $this-> numero;}
    public function getcomplemento(){return $this-> complemento;}
    public function getcidade(){return $this-> cidade;}
    public function getbairro(){return $this-> bairro;}
    public function getuf(){return $this-> uf;}

    public function setcep($cep){$this->cep=$cep;}
    public function setrua($rua){$this->rua=$rua;}
    public function setnumero($numero){$this->numero=$numero;}
    public function setcomplemento($complemento){$this->complemento=$complemento;}
    public function setcidade($cidade){$this->cidade=$cidade;}
    public function setbairro($bairro){$this->bairro=$bairro;}
    public function setuf($uf){$this->uf=$uf;}


    public function inserirend($usuario){

         $cep=$this->cep;
         $rua=$this->rua;
         $numero=$this->numero;
         $complemento=$this->complemento;
         $cidade=$this->cidade;
         $bairro=$this->bairro;
         $uf=$this->uf;


         $SQL="INSERT INTO Endereco (id_usuario,cep,rua,numero,complemento,cidade,bairro,uf)
         value('{$usuario}',
                '{$cep}',
                '{$rua}',
                '{$numero}',
                '{$complemento}',
                '{$cidade}',
                '{$bairro}',
                '{$uf}')";
        include('conexao.php');
        mysqli_query($conexao,$SQL) or die ("Erro ao Cadastrar  ".mysqli_error($conexao));

        mysqli_close($conexao);

        echo('Inserido com Sucesso!');





    }



}



class Conta{

private $id_conta;
private $login;
private $senha;
private $id_access;


public function getidconta(){return $this-> id_conta;}
public function getlogin(){return $this-> login;}
public function getsenha(){return $this-> senha;}
public function getidaccess(){return $this-> id_access;}

public function setidconta($id_conta){$this->id_conta=$id_conta;}
public function setlogin($login){$this->login=$login;}
public function setsenha($senha){$this->senha=$senha;}
public function setidaccess($id_access){$this->id_access=$id_access;}

public function inserirconta(){
    $id_conta=$this->id_conta;
    $login=$this->login;
    $senha=$this->senha;
    $id_access=$this->id_access;

    $SQL="INSERT INTO Conta values(
        '{$id_conta}',
        '{$login}',
         md5('{$senha}'),
        '{$id_access}')";

        include('conexao.php');

        mysqli_query($conexao,$SQL) or die ("Erro ao Cadastrar  ".mysqli_error($conexao));

        mysqli_close($conexao);
}







}

class cardapio{

private $nome;
private $descricao;
private $valor;
private $id_imagem;


public function getnome(){return $this-> nome;}
public function getdescricao(){return $this-> descricao;}
public function getvalor(){return $this-> valor;}
public function getid_imagem(){return $this-> id_imagem;}

public function setnome($nome){$this->nome=$nome;}
public function setdescricao($descricao){$this->descricao=$descricao;}
public function setvalor($valor){$this->valor=$valor;}
public function setid_imagem($id_imagem){$this->id_imagem=$id_imagem;}



public function inserircardapio(){
    $nome=$this->nome;
    $descricao=$this->descricao;
    $valor=$this->valor;
    $id_imagem=$this->id_imagem;

    $SQL="INSERT INTO Cardapio(nome,descricao,valor,id_imagem)values(
        '{$nome}',
        '{$descricao}',
        {$valor},
        '{$id_imagem}')";

        include('conexao.php');

        mysqli_query($conexao,$SQL) or die ("Erro ao Cadastrar  ".mysqli_error($conexao));
        $msgerro=mysqli_error($conexao);
        mysqli_close($conexao);

        if($msgerro==null){
          $alerta=null;
        }
        else {
          $alerta="Erro ao cadastrar !";
        }


        return $alerta;

}

  public function atualizarcard($id_item){

    $nome=$this->nome;
    $descricao=$this->descricao;
    $valor=$this->valor;
    $id_imagem=$this->id_imagem;


    $SQL="UPDATE Cardapio SET nome='{$nome}',valor='{$valor}',descricao='{$descricao}',
      id_imagem='{$id_imagem}' WHERE id_item={$id_item}";
      include('conexao.php');
  mysqli_query($conexao,$SQL);
  $erro=mysqli_error($conexao);
  mysqli_close($conexao);

  if ($erro=="") {
    $msgerro="Atualizado com Sucesso !";
  }else{
    $msgerro="Erro ao Atualizar !";
  }

  return $msgerro;
  }


}




?>
