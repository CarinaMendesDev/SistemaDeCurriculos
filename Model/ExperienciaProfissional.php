<?php
require_once 'ConexaoBD.php';

class ExperienciaProfissional {
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

    // ============================================================
    // Getters e Setters
    // ============================================================
    public function setId($id){ $this->id = $id; }
    public function getId(){ return $this->id; }

    public function setIdUsuario($idusuario){ $this->idusuario = $idusuario; }
    public function getIdUsuario(){ return $this->idusuario; }

    public function setInicio($inicio){ $this->inicio = $inicio; }
    public function getInicio(){ return $this->inicio; }

    public function setFim($fim){ $this->fim = $fim; }
    public function getFim(){ return $this->fim; }

    public function setEmpresa($empresa){ $this->empresa = $empresa; }
    public function getEmpresa(){ return $this->empresa; }

    public function setDescricao($descricao){ $this->descricao = $descricao; }
    public function getDescricao(){ return $this->descricao; }

    // ============================================================
    // 🔹 Inserir experiência profissional
    // ============================================================
    public function inserir($dados){
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $inicio = $dados['txtInicioEP'];
        $fim = $dados['txtFimEP'];
        $empresa = $dados['txtEmpEP'];
        $desc = $dados['txtDescEP'];
        $sql = "INSERT INTO experienciaprofissional (inicio, fim, empresa, descricao)
                VALUES ('$inicio', '$fim', '$empresa', '$desc')";
        $resultado = $conn->query($sql);

        $conn->close();
        return $resultado;
    }

    // ============================================================
    // 🔹 Listar experiências de um usuário
    // ============================================================
    public function listaExperiencias($idusuario){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT * FROM experienciaprofissional WHERE idusuario = $idusuario";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>
