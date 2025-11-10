<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login - Fichário Digital</title>
</head>
<body>

<!-- ============================================================
     Agenda 11 — Tela de Login do Sistema de Currículos
     ------------------------------------------------------------
     Esta tela autentica o usuário (CPF e senha) e dá acesso
     ao sistema principal (principal.php) ou ao cadastro inicial
     ============================================================ -->

<form action="../Controller/navegacao.php" method="post"
      class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle"
      style="width:30%;">
  <input type="hidden" name="nome_form" value="frmLogin" />
  <h2 class="w3-center">Login</h2>

  <!-- CPF -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-user"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF (ex: 33333333333)">
    </div>
  </div>

  <!-- Senha -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-lock"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
    </div>
  </div>

  <!-- Botões -->
  <div class="w3-row w3-section">
    <div class="w3-half">
      <button name="btnLogin" class="w3-button w3-block w3-margin w3-blue w3-round-large" style="width:90%;">Entrar</button>
    </div>
    <div class="w3-half">
      <button name="btnPrimeiroAcesso" formaction="../View/primeiroAcesso.php"
              class="w3-button w3-block w3-margin w3-blue w3-round-large" style="width:90%;">
        Primeiro Acesso?
      </button>
    </div>
  </div>

  <!-- Botão adicional: login administrador (Agenda 14) -->
  <div class="w3-center">
    <button name="btnADM" class="w3-button w3-blue w3-round-large w3-margin" style="width: 90%;">
      Login como Administrador
    </button>
  </div>
</form>

</body>
</html>
