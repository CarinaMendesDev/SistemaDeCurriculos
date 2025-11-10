<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>💼 Painel do Administrador — Sistema de Currículos</title>

  <style>
    /* ============================================================
       Agenda 14 — Desenvolvimento de Sistemas III
       ------------------------------------------------------------
       Painel Principal do Administrador (View)
       - Integra a visualização e gerenciamento dos cadastros
       - Atualiza a barra lateral com novas opções de navegação
       ============================================================ */
    .w3-sidebar {
      width: 130px;
      background: #2196F3;
    }
    body, h1, h2, h3, h4, h5, h6 {
      font-family: "Montserrat", sans-serif;
    }
    .w3-sidebar a {
      transition: 0.3s;
    }
    .w3-sidebar a:hover {
      background-color: #f1f1f1 !important;
      color: #2196F3 !important;
    }
    .w3-main {
      margin-left: 140px;
      padding: 32px;
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- ============================================================
       MENU LATERAL (SIDEBAR) — Atualizado Agenda 14
       ------------------------------------------------------------
       Inclui as opções administrativas:
       - Painel
       - Listar Cadastros
       - Visualizar Usuário
       - Logout
       ============================================================ -->
  <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
    <!-- Painel ADM -->
    <a href="ADMPrincipal.php" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-dashboard w3-xxlarge"></i>
      <p>Painel</p>
    </a>

    <!-- Listar Cadastros -->
    <a href="ADMListarCadastrados.php" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-users w3-xxlarge"></i>
      <p>Listar<br>Cadastros</p>
    </a>

    <!-- Visualizar Usuário -->
    <a href="ADMVisualizarCadastro.php" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>Visualizar<br>Usuário</p>
    </a>

    <!-- Logout -->
    <a href="login.php" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-sign-out w3-xxlarge"></i>
      <p>Sair</p>
    </a>
  </nav>

  <!-- ============================================================
       CONTEÚDO PRINCIPAL — Painel ADM
       ============================================================ -->
  <div class="w3-main">
    <header class="w3-container w3-center w3-padding-32">
      <h1 class="w3-text-blue">💼 Painel do Administrador</h1>
      <p>Gerencie cadastros e visualize informações completas dos usuários.</p>
    </header>

    <section class="w3-row-padding w3-margin-top">
      <div class="w3-third">
        <div class="w3-card-4 w3-white w3-round-large w3-padding w3-center">
          <i class="fa fa-users w3-xxxlarge w3-text-blue"></i>
          <h3>Listar Cadastros</h3>
          <p>Veja todos os usuários cadastrados.</p>
          <form action="ADMListarCadastrados.php" method="post">
            <button class="w3-button w3-blue w3-round-large">Acessar</button>
          </form>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card-4 w3-white w3-round-large w3-padding w3-center">
          <i class="fa fa-eye w3-xxxlarge w3-text-blue"></i>
          <h3>Visualizar Cadastro</h3>
          <p>Veja detalhes completos de um usuário.</p>
          <form action="ADMVisualizarCadastro.php" method="get">
            <button class="w3-button w3-blue w3-round-large">Abrir Visualização</button>
          </form>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card-4 w3-white w3-round-large w3-padding w3-center">
          <i class="fa fa-sign-out w3-xxxlarge w3-text-blue"></i>
          <h3>Sair</h3>
          <p>Encerrar sessão do administrador.</p>
          <form action="login.php" method="post">
            <button class="w3-button w3-blue w3-round-large">Logout</button>
          </form>
        </div>
      </div>
    </section>

    <footer class="w3-center w3-padding-32 w3-small w3-text-grey">
      <p> Sistema de Currículos — Fichário Digital • Agenda 14</p>
      <p>Desenvolvido por <strong>Carina Mendes</strong> | ETEC — Centro Paula Souza</p>
    </footer>
  </div>

</body>
</html>
