<?php 
require_once 'ConexaoBD.php';

class Usuario {
    private $id;
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $email;
    private $senha;

    // ============================================================
    // Getters e Setters
    // ============================================================
    public function setId($id){ $this->id = $id; }
    public function getId(){ return $this->id; }

    public function setNome($nome){ $this->nome = $nome; }
    public function getNome(){ return $this->nome; }

    public function setCPF($cpf){ $this->cpf = $cpf; }
    public function getCPF(){ return $this->cpf; }

    public function setDataNascimento($data){ $this->dataNascimento = $data; }
    public function getDataNascimento(){ return $this->dataNascimento; }

    public function setEmail($email){ $this->email = $email; }
    public function getEmail(){ return $this->email; }

    public function setSenha($senha){ $this->senha = $senha; }
    public function getSenha(){ return $this->senha; }

    // ============================================================
    // 🔹 Inserir novo usuário
    // ============================================================
    public function inserirBD(){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "INSERT INTO usuario (nome, cpf, datanascimento, email, senha)
                VALUES ('$this->nome', '$this->cpf', '$this->dataNascimento', '$this->email', '$this->senha')";
        $conn->query($sql);
        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return $this->id;
    }

    // ============================================================
    // 🔹 Login
    // ============================================================
    public function login($login, $senha){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT * FROM usuario WHERE cpf = '$login' AND senha = '$senha'";
        $re = $conn->query($sql);
        $usuario = $re->fetch_object();
        $conn->close();
        return $usuario ? true : false;
    }

    // ============================================================
    // 🔹 Atualizar dados do usuário
    // ============================================================
    public function atualizar($dados){
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $id = $dados['txtID'];
        $nome = $dados['txtNome'];
        $email = $dados['txtEmail'];
        $data = $dados['txtData'];

        $sql = "UPDATE usuario SET nome='$nome', email='$email', datanascimento='$data' WHERE idusuario=$id";
        $resultado = $conn->query($sql);

        $conn->close();
        return $resultado;
    }

    // ============================================================
    // 🔹 Listar todos os cadastrados (para o admin)
    // ============================================================
    public function listarCadastrados(){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        $sql = "SELECT idusuario, nome FROM usuario ORDER BY nome ASC";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }

    // ============================================================
    // 🔹 Buscar usuário por ID (para ADMVisualizarCadastro)
    // ============================================================
    public function buscarPorId($id) {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "SELECT idusuario AS id, nome, cpf, datanascimento, email FROM usuario WHERE idusuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result()->fetch_assoc();

        $stmt->close();
        $conn->close();
        return $resultado;
    }
}
?>
