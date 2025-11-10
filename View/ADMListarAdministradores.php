<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Administradores Cadastrados — Sistema de Currículos</title>
</head>
<body>

<!-- ============================================================
     Agenda 14 — Listagem de Administradores
     ------------------------------------------------------------
     Exibe os administradores cadastrados na tabela "administrador".
     ============================================================ -->

<div class="w3-container w3-margin">
  <h2 class="w3-center w3-text-blue">Administradores Cadastrados</h2>

  <table class="w3-table-all w3-hoverable w3-centered">
    <thead>
      <tr class="w3-blue">
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
      </tr>
    </thead>

    <tbody>
      <?php
        require_once '../Controller/AdministradorController.php';
        $aController = new AdministradorController();
        $resultado = $aController->gerarLista();
        if ($resultado) {
          while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$linha['idadministrador']}</td>
                    <td>{$linha['nome']}</td>
                    <td>{$linha['cpf']}</td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='3'>Nenhum administrador encontrado.</td></tr>";
        }
      ?>
    </tbody>
  </table>

  <form action="../Controller/navegacao.php" method="post" class="w3-center w3-margin">
    <button name="btnVoltar" class="w3-button w3-blue w3-round-large w3-margin" style="width: 30%;">
      <i class="fa fa-arrow-left"></i> Voltar ao Painel
    </button>
  </form>
</div>

</body>
</html>
