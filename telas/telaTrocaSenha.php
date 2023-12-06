<?php

//include('../bd/protected.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssTrocaSenha.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
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
        <label class="letra-fundinho1">Redefinir sua senha</label>
      </div>
      <div>
        <label class="letra-fundinho2"> Preencha os campos </label>
      </div>
      <div class ="divzada">
        <input type="password" class = "email" placeholder = "Nova senha" id="senha" name= "senha" >
        <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
      </div>

      <div class= "espacin"></div>

      <div class ="divzada">
        <input type="password" class = "email" name = "confirmarNovaSenha" placeholder = "Repetir senha" id="senha-repetir" >
        <i class="bi bi-eye-fill" id="btn-senha1" onclick="mostrarSenha1()"></i>
      </div>
      <div>
        <input type="submit" class = "botao" value="REDEFINIR"></input>
      </div>
      <div class = "divCancelar">
        <label for=""><a href="">Cancelar</a></label>
      </div> 
    </div>
     <script>
  function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type === 'password'){
      inputPass.setAttribute('type' , 'text')
      btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    }else{
      inputPass.setAttribute('type' , 'password')
      btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
  }

  function mostrarSenha1(){
    var inputPass = document.getElementById('senha-repetir')
    var btnShowPass = document.getElementById('btn-senha1')

    if(inputPass.type === 'password'){
      inputPass.setAttribute('type' , 'text')
      btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    }else{
      inputPass.setAttribute('type' , 'password')
      btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
  }
</script>
<script>
            function alterarSenha() {
                var novaSenha = document.getElementById('formAlterarSenha').elements['senha'].value;
                var confirmaNovaSenha = document.getElementById('formAlterarSenha').elements['confirmaNovaSenha'].value;

                // Verificar se alguma das caixas de texto está vazia
                if (novaSenha === '' || confirmaNovaSenha === '') {
                    document.getElementById('erroPreencherCampos').style.display = 'block';
                    document.getElementById('erro8caracteres').style.display = 'none';
                    document.getElementById('erroSenhaNaoCoincide').style.display = 'none';
                    return;
                }
                
                // Verificar se a nova senha e a confirmação coincidem
                if (novaSenha !== confirmaNovaSenha) {
                    document.getElementById('erroPreencherCampos').style.display = 'none';
                    document.getElementById('erro8caracteres').style.display = 'none';
                    document.getElementById('erroSenhaNaoCoincide').style.display = 'block';
                    return;
                }

                $.ajax({
                    url: 'alterar_senha.php',
                    type: 'POST',
                    data: {
                        campo: 'senha',
                        valor: novaSenha,
                        token: token
                    },
                    success: function(responseSenha) {
                        if (responseSenha.indexOf('sucesso') !== -1) {
                            document.getElementById('formAlterarSenha').reset();
                            window.location.href = '../../index.php?mensagem=Senha+alterada+com+sucesso!';
                        }
                    },
                    error: function() {
                        console.error('Erro ao alterar a senha');
                    }
                });
            }
        </script>
</body>
</html>