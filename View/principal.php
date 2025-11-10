<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>💼 Sistema de Currículos — Fichário Digital</title>

  <style>
    /* ============================================================
       Agenda 12 — Desenvolvimento de Sistemas III
       ------------------------------------------------------------
       Interface Principal (View) do Sistema de Currículos
       - Apresenta as seções: Dados Pessoais, Formação Acadêmica,
         Outras Formações e Experiência Profissional.
       - Usa o padrão W3.CSS para layout responsivo e ícones FontAwesome.
       ============================================================ */
    .w3-sidebar { width: 120px; background: #2196F3; }
    body, h1, h2, h3, h4, h5, h6 { font-family: "Montserrat", sans-serif; }
  </style>
</head>

<body class="w3-light-grey">

  <!-- ============================================================
        MENU LATERAL (SIDEBAR)
       ------------------------------------------------------------
       Navegação entre as seções da página principal do sistema.
       ============================================================ -->
  <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
    <!-- HOME -->
    <a href="#home" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>

    <!-- DADOS PESSOAIS -->
    <a href="#dPessoais" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-address-book-o w3-xxlarge"></i>
      <p>Dados<br>Pessoais</p>
    </a>

    <!-- FORMAÇÃO ACADÊMICA -->
    <a href="#formacao" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-mortar-board w3-xxlarge"></i>
      <p>Formação</p>
    </a>

    <!-- OUTRAS FORMAÇÕES -->
    <a href="#outrasFormacoes" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-graduation-cap w3-xxlarge"></i>
      <p>Outras<br>Formações</p>
    </a>

    <!-- EXPERIÊNCIA PROFISSIONAL -->
    <a href="#eProfissional" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fa fa-briefcase w3-xxlarge"></i>
      <p>Experiência</p>
    </a>
  </nav>

  <!-- ============================================================
        CABEÇALHO / HOME
       ============================================================ -->
  <header class="w3-container w3-padding-32 w3-center" id="home">
    <h1 class="w3-text-cyan">SISTEMA DE CURRÍCULOS</h1>
</header>

  <!-- ============================================================
        DADOS PESSOAIS
       ------------------------------------------------------------
       Permite visualizar e atualizar as informações do usuário.
       ============================================================ -->
  <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
    <h2 class="w3-text-cyan">📋 Dados Pessoais</h2>

    <form action="../Controller/navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
      <!-- Campo oculto (ID do usuário) -->
      <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">

      <!-- Nome completo -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
          <i class="w3-xxlarge fa fa-user"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="">
        </div>
      </div>

      <!-- CPF -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
          <i class="w3-xxlarge fa fa-drivers-license"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF" value="">
        </div>
      </div>

      <!-- Data de nascimento -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
          <i class="w3-xxlarge fa fa-calendar"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtData" type="date" value="">
        </div>
      </div>

      <!-- Email -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
          <i class="w3-xxlarge fa fa-envelope-o"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email" value="">
        </div>
      </div>

      <!-- Botão Atualizar -->
      <div class="w3-row w3-section w3-center">
        <button name="btnAtualizar" class="w3-button w3-blue w3-round-large" style="width:25%;">
          <i class="fa fa-refresh"></i> Atualizar
        </button>
      </div>
    </form>
  </div>

  <!-- ============================================================
        FORMAÇÃO ACADÊMICA
       ------------------------------------------------------------
       Permite registrar cursos e formações escolares.
       ============================================================ -->
  <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
    <h2 class="w3-text-cyan">🎓 Formação Acadêmica</h2>

    <form action="../Controller/navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
      <div class="w3-row w3-center">
        <div class="w3-col" style="width:50%;">Data Inicial</div>
        <div class="w3-rest">Data Final</div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:45%;">
          <div class="w3-col" style="width:15%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date">
          </div>
        </div>

        <div class="w3-rest">
          <div class="w3-col" style="width:13%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date">
          </div>
        </div>
      </div>

      <!-- Descrição -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:7%;">
          <i class="w3-xxlarge fa fa-align-justify"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text"
                 placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
        </div>
      </div>

      <!-- Botão Adicionar -->
      <div class="w3-row w3-section w3-center">
        <button name="btnAddFormacao" class="w3-button w3-blue w3-round-large" style="width:25%;">
          <i class="fa fa-plus-circle"></i> Adicionar
        </button>
      </div>
    </form>

    <!-- Tabela -->
    <div class="w3-container">
      <table class="w3-table-all w3-centered">
        <thead>
          <tr class="w3-blue">
            <th>Início</th>
            <th>Fim</th>
            <th>Descrição</th>
            <th>Apagar</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <!-- ============================================================
        OUTRAS FORMAÇÕES
       ============================================================ -->
  <div class="w3-padding-128 w3-content w3-text-grey" id="outrasFormacoes">
    <h2 class="w3-text-cyan">🎓 Outras Formações</h2>

    <form action="../Controller/navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
      <div class="w3-row w3-center">
        <div class="w3-col" style="width:50%;">Data Inicial</div>
        <div class="w3-rest">Data Final</div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:45%;">
          <div class="w3-col" style="width:15%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date">
          </div>
        </div>

        <div class="w3-rest">
          <div class="w3-col" style="width:13%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date">
          </div>
        </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:7%;">
          <i class="w3-xxlarge fa fa-align-justify"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text"
                 placeholder="Descrição: Ex.: Curso de Inglês - Inglês City">
        </div>
      </div>

      <div class="w3-row w3-section w3-center">
        <button name="btnAddOF" class="w3-button w3-blue w3-round-large" style="width:25%;">
          <i class="fa fa-plus-circle"></i> Adicionar
        </button>
      </div>
    </form>

    <div class="w3-container">
      <table class="w3-table-all w3-centered">
        <thead>
          <tr class="w3-blue">
            <th>Início</th>
            <th>Fim</th>
            <th>Descrição</th>
            <th>Apagar</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <!-- ============================================================
        EXPERIÊNCIA PROFISSIONAL
       ============================================================ -->
  <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
    <h2 class="w3-text-cyan">💼 Experiência Profissional</h2>

    <form action="../Controller/navegacao.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
      <div class="w3-row w3-center">
        <div class="w3-col" style="width:50%;">Data Inicial</div>
        <div class="w3-rest">Data Final</div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:45%;">
          <div class="w3-col" style="width:15%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date">
          </div>
        </div>

        <div class="w3-rest">
          <div class="w3-col" style="width:13%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date">
          </div>
        </div>
      </div>

      <!-- Empresa -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:7%;">
          <i class="w3-xxlarge fa fa-building"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Empresa">
        </div>
      </div>

      <!-- Descrição -->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width:7%;">
          <i class="w3-xxlarge fa fa-align-justify"></i>
        </div>
        <div class="w3-rest">
          <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                 placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
        </div>
      </div>

      <div class="w3-row w3-section w3-center">
        <button name="btnAddEP" class="w3-button w3-blue w3-round-large" style="width:25%;">
          <i class="fa fa-plus-circle"></i> Adicionar
        </button>
      </div>
    </form>

    <div class="w3-container">
      <table class="w3-table-all w3-centered">
        <thead>
          <tr class="w3-blue">
            <th>Início</th>
            <th>Fim</th>
            <th>Empresa</th>
            <th>Descrição</th>
            <th>Apagar</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

</body>
</html>
