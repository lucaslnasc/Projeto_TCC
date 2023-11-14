<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="cssLogin.css">
</head>

<body>
    <header>
        <div id="headerCima">
            <div class="logozada">
                <img src="../img/LOGOFIMSEM-removebg-preview (1).png" alt="Logo do sistema">
            </div>
        </div>
    </header>
    <div class="container row mx-auto">
    <hr class="linha">
        <div class="area-login col-sm-12 col-md-6">
            <form action="" method="post">
                <h3 class="tituloLogin">Fazer Login</h3>
                <label for="">E-mail</label>
                <input type="email" name="email" aria-describedby="addon-wrapping" required>
                <label for="">Senha</label>
                <input type="password" aria-describedby="addon-wrapping" required>
                <a class="link" href="">Esqueci Senha</a>
                <input type="submit" class="input-entrar" value="Entrar">
            </form>

            <hr class="linha-center">

        </div>
        <div class="area-cadastro">
            <h3 class="tituloConta">Criar uma Conta</h3>
            <p class="text-cadastro">Com uma conta você pode</p>
            <div class="func-icons row">
                <span class="col-3 span-img"><img src="../img/Cartão.png" alt="Cartão de credito">
                    <p>Salvar <br>Cartões</p>
                </span>

                <span class="col-3"><img src="../img/Carteira.png" alt="Carteira">
                    <p>Pagamento <br>Rápido</p>
                </span>

                <span class="col-3"><img src="../img/Favoritos.png" alt="Favoritar">
                    <p>Favoritar <br>Locais</p>
                </span>

                <span class="col-3"><img src="../img/Calendário.png" alt="Calendário">
                    <p>Histórico</p>
                </span>

                <input type="submit" class="input-cadastrar" value="Cadastrar">
            </div>
        </div>
        <hr class="linha">
    </div>
</body>

</html>