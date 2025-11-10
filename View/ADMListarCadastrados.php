<?php
// ============================================================
// 💼 Agenda 14 - Desenvolvimento de Sistemas III
// Página: ADMListarCadastrados.php
// Função: Lista todos os usuários cadastrados e exibe botão "Visualizar"
// Compatível com UsuarioController::gerarLista() (retorna mysqli_result)
// ============================================================

require_once '../Controller/UsuarioController.php';
$uController = new UsuarioController();

// retorna mysqli_result (ou null)
$resultado = $uController->gerarLista();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Usuários Cadastrados</title>
</head>
<body class="w3-light-grey">

<div class="w3-container w3-padding">
  <h2 class="w3-text-blue">Usuários Cadastrados</h2>

  <table class="w3-table-all w3-hoverable w3-centered">
    <thead>
      <tr class="w3-blue">
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_object()) {
          // campos conforme sua Model/BD: idusuario, nome
          echo '<tr>';
          echo '<td>'.htmlspecialchars($row->idusuario).'</td>';
          echo '<td>'.htmlspecialchars($row->nome).'</td>';
          echo '<td>';
          echo '  <form action="ADMVisualizarCadastro.php" method="get" style="display:inline-block">';
          echo '    <input type="hidden" name="id" value="'.htmlspecialchars($row->idusuario).'">';
          echo '    <button class="w3-button w3-blue w3-round-large">';
          echo '      <i class="fa fa-eye"></i> Visualizar';
          echo '    </button>';
          echo '  </form>';
          echo '</td>';
          echo '</tr>';
        }
      } else {
        echo '<tr><td colspan="3">Nenhum usuário encontrado.</td></tr>';
      }
      ?>
    </tbody>
  </table>

  <br>
  <form action="ADMPrincipal.php" method="post" class="w3-center">
    <button class="w3-button w3-round-large w3-blue" style="width:30%;">
      <i class="fa fa-arrow-left"></i> Voltar ao Painel
    </button>
  </form>
</div>

</body>
</html>
