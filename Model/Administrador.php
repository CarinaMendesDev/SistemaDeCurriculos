<?php
require_once 'ConexaoBD.php';

class Administrador {
    private $id;
    private $nome;
    private $cpf;
    private $senha;

    // Getters e Setters
    public function setID($id){ $this->id = $id; }
    public function getID(){ return $this->id; }

    public function setNome($nome){ $this->nome = $nome; }
    public function getNome(){ return $this->nome; }

    public function setCPF($cpf){ $this->cpf = $cpf; }
    public function getCPF(){ return $this->cpf; }

    public function setSenha($senha){ $this->senha = $senha; }
    public function getSenha(){ return $this->senha; }

    // Carrega um administrador por CPF
    public function carregarAdministrador($cpf){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT * FROM administrador WHERE cpf = '$cpf'";
        $re = $conn->query($sql);
        $r = $re->fetch_object();
        if($r != null){
            $this->id = $r->idadministrador;
            $this->nome = $r->nome;
            $this->cpf = $r->cpf;
            $this->senha = $r->senha;
            $conn->close();
            return true;
        } else {
            return false;
        }
    }

    // Lista administradores (requisito novo do RH)
    public function listaCadastrados(){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT idadministrador, nome, cpf FROM administrador";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>
