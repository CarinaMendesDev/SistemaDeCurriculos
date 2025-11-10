<?php
// ============================================================
// 💾 CONEXÃO COM O BANCO DE DADOS (MySQL)
// ------------------------------------------------------------
// Classe usada em todas as Models para conectar ao banco
// ============================================================
class ConexaoBD {
    private $serverName = "localhost";   // Servidor local do XAMPP
    private $userName = "root";          // Usuário padrão do MySQL
    private $password = "";              // Senha (vazia no XAMPP)
    private $dbName = "projeto_final";   // Nome do seu banco

    // Método público para abrir conexão
    public function conectar() {
        $conn = new mysqli(
            $this->serverName,
            $this->userName,
            $this->password,
            $this->dbName
        );

        // Teste de erro de conexão
        if ($conn->connect_error) {
            die("❌ Erro de conexão: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>
