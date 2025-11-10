<?php
require_once 'ConexaoBD.php';

class FormacaoAcad {
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
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

    public function setDescricao($descricao){ $this->descricao = $descricao; }
    public function getDescricao(){ return $this->descricao; }

    // ============================================================
    // 🔹 Inserir formação acadêmica
    // ============================================================
    public function inserir($dados){
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $inicio = $dados['txtInicioFA'];
        $fim = $dados['txtFimFA'];
        $desc = $dados['txtDescFA'];
        $sql = "INSERT INTO formacaoacademica (inicio, fim, descricao)
                VALUES ('$inicio', '$fim', '$desc')";
        $resultado = $conn->query($sql);

        $conn->close();
        return $resultado;
    }

    // ============================================================
    // 🔹 Inserir outras formações
    // ============================================================
    public function inserirOutras($dados){
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $inicio = $dados['txtInicioOF'];
        $fim = $dados['txtFimOF'];
        $desc = $dados['txtDescOF'];
        $sql = "INSERT INTO outrasformacoes (inicio, fim, descricao)
                VALUES ('$inicio', '$fim', '$desc')";
        $resultado = $conn->query($sql);

        $conn->close();
        return $resultado;
    }

    // ============================================================
    // 🔹 Listar formações de um usuário
    // ============================================================
    public function listaFormacoes($idusuario){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT * FROM formacaoacademica WHERE idusuario = $idusuario";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>
