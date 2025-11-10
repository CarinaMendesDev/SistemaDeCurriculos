<?php
// ============================================================
// 💼 Agenda 14 - Desenvolvimento de Sistemas III
// Página: ADMVisualizarCadastro.php
// Função: Exibe todos os dados de um usuário selecionado
// Dependências: Model/Usuario.php, Model/FormacaoAcad.php, Model/ExperienciaProfissional.php
// ============================================================

if (!isset($_SESSION)) { session_start(); }

// Models (usamos diretamente as models já existentes no seu projeto)
require_once '../Model/Usuario.php';
require_once '../Model/FormacaoAcad.php';
require_once '../Model/ExperienciaProfissional.php';

// Sanitiza e valida o ID vindo por GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Busca o usuário pelo ID
$usuarioModel = new Usuario();
$usuario = null;

// Se você tiver um método buscarPorId($id) na classe Usuario, use-o.
// Caso não tenha, criamos aqui uma consulta segura como fallback.
if (method_exists($usuarioModel, 'buscarPorId')) {
    $usuario = $usuarioModel->buscarPorId($id); // deve retornar array assoc ou null
} else {
    // Fallback: busca direta no banco
    require_once '../Model/ConexaoBD.php';
    $con = new ConexaoBD();
    $conn = $con->conectar();

    $stmt = $conn->prepare("SELECT idusuario AS id, nome, cpf, email FROM usuario WHERE idusuario = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $re = $stmt->get_result();
    $usuario = $re ? $re->fetch_assoc() : null;

    $stmt->close();
    $conn->close();
}

// Se não encontrou o usuário, mostra mensagem amigável
if (!$id || !$usuario) {
    echo '<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><title>Usuário não encontrado</title></head><body class="w3-light-grey">';
    echo '<div class="w3-container w3-padding w3-center">';
    echo '<div class="w3-panel w3-pale-red w3-border w3-round-large"><h3>Ops!</h3><p>Usuário não encontrado ou ID inválido.</p></div>';
    echo '<form action="ADMListarCadastrados.php" method="post"><button class="w3-button w3-blue w3-round-large">Voltar</button></form>';
    echo '</div></body></html>';
    exit;
}

// Carrega formações e experiências pelo id do usuário
$formacaoModel = new FormacaoAcad();
$formacoesResult = $formacaoModel->listaFormacoes($usuario['id']); // mysqli_result

$expModel = new ExperienciaProfissional();
$experienciasResult = $expModel->listaExperiencias($usuario['id']); // mysqli_result
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Visualizar Cadastro</title>
<style>
  body, h1, h2, h3, h4, h5, h6 { font-family: "Montserrat", sans-serif; }
  .box { background:#fff; }
</style>
</head>
<body class="w3-light-grey">

<div class="w3-container w3-padding w3-animate-opacity">

  <!-- Dados do usuário -->
  <div class="w3-card-4 w3-round-large w3-padding box">
    <h2 class="w3-text-blue"><i class="fa fa-user"></i> Dados do Usuário</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($usuario['nome'] ?? '') ?></p>
    <p><strong>CPF:</strong> <?= htmlspecialchars($usuario['cpf'] ?? '') ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($usuario['email'] ?? '') ?></p>
  </div>

  <!-- Formação Acadêmica -->
  <div class="w3-card-4 w3-round-large w3-padding box w3-margin-top">
    <h3 class="w3-text-blue"><i class="fa fa-graduation-cap"></i> Formação Acadêmica</h3>
    <table class="w3-table-all w3-small w3-centered">
      <thead>
        <tr class="w3-blue">
          <th>Início</th>
          <th>Fim</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($formacoesResult && $formacoesResult->num_rows > 0) {
            while ($f = $formacoesResult->fetch_object()) {
                echo '<tr>';
                echo '<td>'.htmlspecialchars($f->inicio ?? '').'</td>';
                echo '<td>'.htmlspecialchars($f->fim ?? '').'</td>';
                echo '<td>'.htmlspecialchars($f->descricao ?? '').'</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="3">Nenhuma formação cadastrada.</td></tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Experiência Profissional -->
  <div class="w3-card-4 w3-round-large w3-padding box w3-margin-top">
    <h3 class="w3-text-blue"><i class="fa fa-briefcase"></i> Experiência Profissional</h3>
    <table class="w3-table-all w3-small w3-centered">
      <thead>
        <tr class="w3-blue">
          <th>Início</th>
          <th>Fim</th>
          <th>Empresa</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($experienciasResult && $experienciasResult->num_rows > 0) {
            while ($e = $experienciasResult->fetch_object()) {
                echo '<tr>';
                echo '<td>'.htmlspecialchars($e->inicio ?? '').'</td>';
                echo '<td>'.htmlspecialchars($e->fim ?? '').'</td>';
                echo '<td>'.htmlspecialchars($e->empresa ?? '').'</td>';
                echo '<td>'.htmlspecialchars($e->descricao ?? '').'</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">Nenhuma experiência cadastrada.</td></tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Voltar -->
  <form action="ADMListarCadastrados.php" method="post" class="w3-center w3-margin-top">
    <button class="w3-button w3-blue w3-round-large">
      <i class="fa fa-arrow-left"></i> Voltar
    </button>
  </form>
</div>

</body>
</html>
