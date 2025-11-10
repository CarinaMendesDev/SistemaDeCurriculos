<?php
// ============================================================
// Sistema de Currículos — Controller/UsuarioController.php
// ------------------------------------------------------------
// Controla as ações relacionadas ao usuário (cadastro, login,
// atualização, formações e experiências).
// Compatível com Agendas 10 a 14 — Centro Paula Souza / ETEC
// ============================================================

require_once '../Model/Usuario.php';
require_once '../Model/FormacaoAcad.php';
require_once '../Model/ExperienciaProfissional.php';
require_once '../Model/ConexaoBD.php';

class UsuarioController
{
    // ============================================================
    // LOGIN
    // ============================================================
    public function login($login, $senha)
    {
        $usuario = new Usuario();
        return $usuario->login($login, $senha);
    }

    // ============================================================
    // CADASTRO (Primeiro Acesso)
    // ============================================================
    public function cadastrar($nome, $cpf, $email, $senha)
    {
        $usuario = new Usuario();

        // Define os atributos via setters
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $usuario->setDataNascimento(date('Y-m-d')); // opcional — evita null

        // Chama o método da Model para inserir no BD
        return $usuario->inserirBD();
    }

    // ============================================================
    // ATUALIZAÇÃO DE DADOS PESSOAIS
    // ============================================================
    public function atualizarDados($dados)
    {
        $usuario = new Usuario();
        return $usuario->atualizar($dados);
    }

    // ============================================================
    // LISTAR USUÁRIOS (para o Administrador)
    // ============================================================
    public function gerarLista()
    {
        $usuario = new Usuario();
        return $usuario->listarCadastrados();
    }

    // ============================================================
    // INSERIR FORMAÇÃO ACADÊMICA
    // ============================================================
    public function inserirFormacao($dados)
    {
        $formacao = new FormacaoAcad();
        return $formacao->inserir($dados);
    }

    // ============================================================
    // INSERIR OUTRAS FORMAÇÕES
    // ============================================================
    public function inserirOutrasFormacoes($dados)
    {
        $formacao = new FormacaoAcad();
        return $formacao->inserirOutras($dados);
    }

    // ============================================================
    // INSERIR EXPERIÊNCIA PROFISSIONAL
    // ============================================================
    public function inserirExperiencia($dados)
    {
        $exp = new ExperienciaProfissional();
        return $exp->inserir($dados);
    }

    // ============================================================
    // BUSCAR USUÁRIO POR ID (para ADMVisualizarCadastro)
    // ============================================================
    public function buscarUsuarioPorId($id)
    {
        $usuario = new Usuario();
        return $usuario->buscarPorId($id);
    }
}
?>
