<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssCartao.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Vaga Certa</title>
</head>

<body class="padrao0">
    <header>
        <div id="headerCima">
            <div class="logozada">
                <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1).png" alt="Logo do sistema"></a>
            </div>
        </div>
        <div id="headerMeio">
            <div class="novoMenu">
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><img src="../img/Subtract.png" alt="Icone de inicio">Inicio</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><img src="../img/User_fill.png" alt="Icone de Perfil">Conta</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><img src="../img/Favorite.png" alt="Icone de Favorito">Favorito</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href="telaAjustes_Cartoes.php"><img src="../img/Credit_card.png"
                                alt="Icone de Cartão">Cartões</a></li>
                </ul>
                <hr class="linha">

                <footer class="inferiorLateral">
                    <a href="telaLogin.php"><img src="../img/Import.png" alt="Sair icone">Sair</a>
                </footer>
            </div>

        </div>
        <div id="headerBaixo">
            <div id="rodape"></div>
        </div>
    </header>

<div class="painelCartao">
    <div class= "botRe">
    <div class = "botaoRemover">
        <i class="bi bi-three-dots-vertical"></i>
        <button class="revbot">Remover</button>
    </div>
    </div>

    <br>

    <div class="infCartao">
        <span>Número do Cartão</span><br>
        <input type="text">
            <p></p>
        <span>Expira em:</span><br>
        <input type="text" placeholder="00/0000">
    </div>
</div>
</body>
