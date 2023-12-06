<?php 
include('../bd/conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssEmail.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
      <form method = "post" action="../TestesNaoFinalizados/Send.php">
      <div>
        <input type="email" class = "email" name ="email" placeholder = "Email" required>
        <input type="hidden" name="assunto" id="assunto" value="Recuperação de senha">
        <input type="hidden" name="corpo_email" id="corpo_email" value="Prezado usuário, segue abaixo o link para a recuperação de senha. O link expira em 1 hora. Caso não tenha sido você, ignore este email.<br>Clique no link a seguir para redefinir sua senha: http://localhost/TCC/telas/telaTrocaSenha.php" + token">
      </div>
      <div>
        <input type="submit" class = "botao" value="ENVIAR" onclick="verificarEEnviarEmail()"></input>
      </div>
      <div class = "divCancelar">
        <label for=""><a href="telaLogin.php">Cancelar</a></label>
      </div>
    </form>
    </div>
    <script>
    function verificarEEnviarEmail() {
        var email = $('.email').val();

        if (!email) {
            document.getElementById("email_enviado").style.display = "none";
            $('#mensagem_erro').html("O campo de e-mail não foi preenchido.").show();
            return;
        }
        document.getElementById("mensagem_erro").style.display = "none";
        verificarEmail();
    }

    function verificarEmail() {
        var email = $('.email').val();
        $.ajax({
            type: 'POST',
            url: 'verificarEmail.php', // Corrigido o caminho do arquivo PHP
            data: {
                email: email,
            },
            success: function(response) {
                var data = JSON.parse(response);
                if (Number(data.total) === 1) {
                    resetPassword(data.id);
                } else {
                    document.getElementById("email_enviado").style.display = "none";
                    $('#mensagem_erro').html("E-mail não cadastrado.").show();
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function resetPassword(userId) {
        var email = $('.email').val();
        var assunto = $('#assunto').val();
        $.ajax({
            type: 'POST',
            url: 'Enviar_Token.php',
            data: {
                email: email,
                userId: userId
            },
            success: function(token) {
                var corpo_email = "Prezado usuário, segue abaixo o link para a recuperação de senha. O link expira em 1 hora. Caso não tenha sido você, ignore este email.<br>Clique no link a seguir para redefinir sua senha: http://localhost/VAGACERTA/telas/telaTrocaSenha.php?token=" + token;
                $.ajax({
                    type: 'POST',
                    url: '../TestesNaoFinalizados/Send.php',
                    data: {
                        email: email,
                        assunto: assunto,
                        corpo_email: corpo_email
                    },
                    success: function(response) {
                        $('#email_enviado').html(response).show();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
</body>
</html>