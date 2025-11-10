<?php
/* ============================================================
   💙 SISTEMA DE CURRÍCULOS — AdministradorController.php
   ------------------------------------------------------------
   Função:
   - Controla o login e listagem dos administradores (RH)
   - Permite acesso ao painel administrativo (Agenda 14)
   ============================================================ */

if (!isset($_SESSION)) { session_start(); }

class AdministradorController {

    // ============================================================
    // 🔹 LOGIN DO ADMINISTRADOR
    // ============================================================
    public function loginADM($cpf, $senha) {
        require_once '../Model/Administrador.php';
        $adm = new Administrador();

        if ($adm->carregarAdministrador($cpf)) {
            if ($adm->getSenha() == $senha) {
                $_SESSION['Administrador'] = serialize($adm);
                return true;
            }
        }
        return false;
    }

    // ============================================================
    // 🔹 LISTAR ADMINISTRADORES CADASTRADOS
    // ============================================================
    public function gerarLista() {
        require_once '../Model/Administrador.php';
        $a = new Administrador();
        return $a->listaCadastrados();
    }
}
?>
