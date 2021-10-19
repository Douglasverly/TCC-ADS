
<?php 

class funcionario{

    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $dt_nasc;
    private $sexo;
    private $telefone;
    private $email;
    private $dt_admissao;
    private $id_cargo;

    public function getid_usuario(){
        return "{$this->id_usuario}";

    }
    public function getnome(){
        return "{$this->nome}";

    }
    public function getsobrenome(){
        return "{$this->sobrenome}";

    }
    public function getdt_nasc(){
        return "{$this->dt_nasc}";

    }
    public function getsexo(){
        return "{$this->sexo}";

    }
    public function gettelefone(){
        return "{$this->telefone}";

    }
    public function getemail(){
        return "{$this->email}";

    }
    public function getdt_admissao(){
        return "{$this->dt_admissao}";

    }
    public function getid_cargo(){
        return "{$this->id_cargo}";

    }
//-----------------METODOS SET-----------------//
    public function setid_usuario($id_usuario){
        $this->id_usuario=$id_usuario;

    }
    public function setnome($nome){
        $this->id_usuario=$nome;

    }
    public function setsobrenome($sobrenome){
        $this->id_usuario=$sobrenome;

    }
    public function setdt_nasc($dt_nasc){
        $this->id_usuario=$dt_nasc;

    }
    public function setsexo($sexo){
        $this->id_usuario=$sexo;

    }
    public function settelefone($telefone){
        $this->id_usuario=$telefone;

    }
    public function setemail($email){
        $this->id_usuario=$email;

    }
    public function setdt_admissao($dt_admissao){
        $this->id_usuario=$dt_admissao;

    }
    public function setid_cargo($id_cargo){
        $this->id_usuario=$id_cargo;

    }





};






?>

