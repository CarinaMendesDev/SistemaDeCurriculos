<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login Administrador — Sistema de Currículos</title>
</head>
<body>

<!-- ============================================================
     Agenda 14 — Tela de Login do Administrador
     ------------------------------------------------------------
     Permite que o RH (Administrador) acesse o sistema para
     gerenciar cadastros de usuários e administradores.
     ============================================================ -->

<form action="../Controller/navegacao.php" method="post"
      class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle"
      style="width: 30%;">
  <h2 class="w3-center">Login do Administrador</h2>

  <!-- CPF -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-id-card"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtLoginADM" type="text" placeholder="CPF (ex: 22222222222)">
    </div>
  </div>

  <!-- Senha -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%">
      <i class="w3-xxlarge fa fa-lock"></i>
    </div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtSenhaADM" type="password" placeholder="Senha">
    </div>
  </div>

  <!-- Entrar -->
  <div class="w3-row w3-section w3-center">
    <button name="btnLoginADM" class="w3-button w3-blue w3-round-large w3-block w3-margin">Entrar</button>
  </div>
</form>

</body>
</html>
