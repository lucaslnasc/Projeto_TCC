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
            <form action="../bd/validarLogin.php" method="post">
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
                <a class="link" href="telaEmail.php">Esqueci Senha</a>
                <input type="submit" class="input-entrar" value="ENTRAR">
                <button type="button" class="btn-adm" data-toggle="modal" data-target="#admModal">Entrar Como ADM</button>
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
                    <a href="newCad.php"><input type="submit" class=" input-cadastrar" value="CADASTRAR"></a>
                </p>
            </div>
        </div>
        <hr class="linha">
    </div>

    <div class="modal fade" id="admModal" tabindex="-1" role="dialog" aria-labelledby="admModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="admModalLabel">Login ADM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../back-adm/validarLoginADM.php" method="post">
                        <div class="form-group">
                            <label for="adm-email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="adm-password" class="col-form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <!-- Adicione outros campos necessários para o login ADM -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
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
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>


</html>