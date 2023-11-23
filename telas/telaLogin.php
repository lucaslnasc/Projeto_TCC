<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaga Certa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssLogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <div id="headerCima">
            <div class="logozada">
              <img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt="Logo do sistema">
            </div>
        </div>
    </header>
    <div class="container row mx-auto">
        <hr class="linha">
        <div class="area-login">
            <form action="loginUser.php" method="post">
                <h3 class="tituloLogin">Fazer Login</h3>
                <div class="inputBox eEmail">
                <input type="email" required="required" id="email" name="email">
                <span>Endereço de E-mail</span>
                </div>
                <div class="inputBox senha">
                <input type="password" required="required" id="senha" name="senha">
                <span>Senha</span>
                <i class="bi bi-eye-fill olho" id="btn-senha" onclick="mostrarSenha()"></i>
                </div>
                <a class="link" href="">Esqueci Senha</a>
                <input type="submit" class="input-entrar" value="Entrar">
            </form>

            <hr class="linha-center">

        </div>
        <div class="area-cadastro">
            <h3 class="tituloConta">Criar uma Conta</h3>
            <p class="text-cadastro">Com uma conta você pode</p>
            <div class="func-icons row">
                <span class="col-2 span-img"><img src="../img/Cartão.png" alt="Cartão de credito">
                    <p>Salvar <br>Cartões</p>
                </span>

                <span class="col-2 span-img"><img src="../img/Carteira.png" alt="Carteira">
                    <p>Pagamento <br>Rápido</p>
                </span>

                <span class="col-2 span-img"><img src="../img/Favoritos.png" alt="Favoritar">
                    <p>Favoritar <br>Locais</p>
                </span>

                <span class="col-2 span-img-calendario"><img src="../img/Calendário.png" alt="Calendário">
                    <p>Agendamento</p>
                </span>

                <p>
                    <a href="newCad.php"><input type="submit" class=" input-cadastrar" value="Cadastrar"></a>
                </p>
            </div>
        </div>
        <hr class="linha">
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
</script>
</body>

</html>