<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Primeiro Acesso</title>
</head>
<body>

<!-- ============================================================
     Agenda 11 — Tela de Primeiro Acesso (Cadastro do Usuário)
     ------------------------------------------------------------
     Cadastra um novo usuário na tabela “usuario” do banco
     ============================================================ -->

<form action="../Controller/navegacao.php" method="post"
      class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width:30%;">
  <h2 class="w3-center">Primeiro Acesso</h2>

  <!-- Nome -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo">
    </div>
  </div>

  <!-- CPF -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-id-card"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF (somente números)">
    </div>
  </div>

  <!-- Data de nascimento -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-calendar"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtData" type="date">
    </div>
  </div>

  <!-- Email -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email">
    </div>
  </div>

  <!-- Senha -->
  <div class="w3-row w3-section">
    <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
    </div>
  </div>

  <!-- Botão Cadastrar -->
  <div class="w3-row w3-section w3-center">
    <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-blue w3-round-large" style="width:90%;">Cadastrar</button>
  </div>
</form>

</body>
</html>
