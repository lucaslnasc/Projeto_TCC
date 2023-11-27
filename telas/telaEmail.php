<?php
include('../bd/conexao.php');

$veiculo = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssEmail.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <title>Vaga Certa</title>
</head>
<body class="padrao0">
<header>
        <div id="headerCima">
            <div class="logozada">
                <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt=""></a>
            </div>
</div>
    </header>
    <div class = "fundo">
      <div>
        <label class="letra-fundinho1">Esqueci minha senha</label>
      </div>
      <div>
        <label class="letra-fundinho2"> Para redefinir sua senha, informe o e-mail <br> cadastrado
            na sua conta e lhe enviaremos uma <br> autorização para a troca de senha.  </label>
      </div>
      <div>
        <input type="" class = "email" placeholder = "Email">
      </div>
      <div>
        <input type="" class = "botao" value="ENVIAR"></input>
      </div>
      <div class = "divCancelar">
        <label for=""><a href="telaLogin.php">Cancelar</a></label>
      </div>
    </div>
</body>
</html>