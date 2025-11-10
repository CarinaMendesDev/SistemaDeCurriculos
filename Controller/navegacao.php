<?php
/* ============================================================
    SISTEMA DE CURRÍCULOS — Controller de Navegação
    ------------------------------------------------------------
   Função:
   - Recebe as ações dos formulários (botões)
   - Redireciona para a View correta ou chama o Controller
   ============================================================ */

session_start(); // Permite usar variáveis de sessão

// ============================================================
// 🔹 Requisições de Controllers (Model + Controladores)
// ============================================================
require_once 'UsuarioController.php';
require_once 'AdministradorController.php';

$usuarioController = new UsuarioController();
$admController = new AdministradorController();

// ============================================================
// 🔹 LOGIN e PRIMEIRO ACESSO
// ============================================================

// LOGIN DO USUÁRIO NORMAL
if (isset($_POST['btnLogin'])) {
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    $resultado = $usuarioController->login($login, $senha);

    if ($resultado) {
        header('location: ../View/principal.php'); // sucesso
    } else {
        header('location: ../View/cadastroNaoRealizado.php'); // erro
    }
    exit;
}

// PRIMEIRO ACESSO (CADASTRO DE NOVO USUÁRIO)
if (isset($_POST['btnPrimeiroAcesso'])) {
    header('location: ../View/primeiroAcesso.php');
    exit;
}

// CADASTRAR NOVO USUÁRIO (primeiro acesso)
if (isset($_POST['btnCadastrar'])) {
    $nome  = $_POST['txtNome'];
    $cpf   = $_POST['txtCPF'];
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];

    $resultado = $usuarioController->cadastrar($nome, $cpf, $email, $senha);

    if ($resultado) {
        header('location: ../View/cadastroRealizado.php');
    } else {
        header('location: ../View/cadastroNaoRealizado.php');
    }
    exit;
}

// ============================================================
// 🔹 DADOS PESSOAIS / FORMAÇÃO / EXPERIÊNCIA
// ============================================================

// ATUALIZAR DADOS PESSOAIS
if (isset($_POST['btnAtualizar'])) {
    $resultado = $usuarioController->atualizarDados($_POST);
    if ($resultado) {
        header('location: ../View/atualizacaoRealizada.php');
    } else {
        header('location: ../View/operacaoNaoRealizada.php');
    }
    exit;
}

// ADICIONAR FORMAÇÃO ACADÊMICA
if (isset($_POST['btnAddFormacao'])) {
    $resultado = $usuarioController->inserirFormacao($_POST);
    if ($resultado) {
        header('location: ../View/informacaoInserida.php');
    } else {
        header('location: ../View/operacaoNaoRealizada.php');
    }
    exit;
}

// ADICIONAR OUTRAS FORMAÇÕES
if (isset($_POST['btnAddOF'])) {
    $resultado = $usuarioController->inserirOutrasFormacoes($_POST);
    if ($resultado) {
        header('location: ../View/informacaoInserida.php');
    } else {
        header('location: ../View/operacaoNaoRealizada.php');
    }
    exit;
}

// ADICIONAR EXPERIÊNCIA PROFISSIONAL
if (isset($_POST['btnAddEP'])) {
    $resultado = $usuarioController->inserirExperiencia($_POST);
    if ($resultado) {
        header('location: ../View/informacaoInserida.php');
    } else {
        header('location: ../View/operacaoNaoRealizada.php');
    }
    exit;
}

// ============================================================
// 🔹 ADMINISTRADOR (Agenda 14)
// ============================================================

// LOGIN DO ADMINISTRADOR
if (isset($_POST['btnLoginADM'])) {
    $login = $_POST['txtLoginADM'];
    $senha = $_POST['txtSenhaADM'];

    $resultado = $admController->loginADM($login, $senha);

    if ($resultado) {
        header('location: ../View/ADMPrincipal.php');
    } else {
        header('location: ../View/cadastroNaoRealizado.php');
    }
    exit;
}

// LISTAR USUÁRIOS CADASTRADOS
if (isset($_POST['btnListarCadastrados'])) {
    header('location: ../View/ADMListarCadastrados.php');
    exit;
}

// LISTAR ADMINISTRADORES CADASTRADOS
if (isset($_POST['btnListarAdministradores'])) {
    header('location: ../View/ADMListarAdministradores.php');
    exit;
}

// VOLTAR AO PAINEL DO ADMINISTRADOR
if (isset($_POST['btnVoltar'])) {
    header('location: ../View/ADMPrincipal.php');
    exit;
}

// ============================================================
// 🔹 MENSAGENS PADRÃO (feedback)
// ============================================================

if (isset($_POST['btnInfInserir'])) {
    header('location: ../View/principal.php');
    exit;
}

if (isset($_POST['btnInfExcluir'])) {
    header('location: ../View/principal.php');
    exit;
}

if (isset($_POST['btnAtualizacaoCadastro'])) {
    header('location: ../View/principal.php');
    exit;
}

// ============================================================
// 🔹 CASO NENHUM BOTÃO SEJA RECONHECIDO
// ============================================================
header('location: ../View/login.php');
exit;
?>
