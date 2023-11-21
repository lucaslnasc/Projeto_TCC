<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssPrincipal.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.png" type="image/x-icon">
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
                    <li><a href="telaFavorito.php"><img src="../img/Favorite.png" alt="Icone de Favorito">Favorito</a>
                    </li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href="telaCartoes.php"><img src="../img/Credit_card.png" alt="Icone de Cartão">Cartões</a>
                    </li>
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

    <div class="meio">
        <div class="search">
            <input type="text" id="searchInput" placeholder="Pesquisa">
        </div>
        <div class="card" data-location="Baratie">
            <a href="">
                <h3><b>Baratie</b></h3>
                <p>East - Blue</p>
                <p>Vagas disponiveis: </p>
                <input type="checkbox" id="heart"/>
                <label for="heart">
                </label>
            </a>
        </div>
        <div class="card" data-location="Wano">
            <a href="">
                <h3><b>Wano</b></h3>
                <p>Grand Line</p>
                <p>Vagas disponiveis: </p>
                <input type="checkbox" id="heart-2"/>
                <label for="heart-2">
                </label>
            </a>
        </div>
        <div class="card" data-location="Sabaody">
            <a href="">
                <h3><b>Sabaody</b></h3>
                <p>Grand Line</p>
                <p>Vagas disponiveis: </p>
                <input type="checkbox" id="heart-3"/>
                <label for="heart-3">
                </label>
            </a>
        </div>
        <div class="card" data-location="Whole Cake">
            <a href="">
                <h3><b>Whole Cake</b></h3>
                <p>Grand Line</p>
                <p>Vagas disponiveis:</p>
                <input type="checkbox" id="heart-4"/>
                <label for="heart-4">
                </label>
            </a>
        </div>
        <div class="card" data-location="Alabasta">
            <a href="">
                <h3><b>Alabasta</b></h3>
                <p>Grand Line</p>
                <p>Vagas disponiveis:</p>
                <input type="checkbox" id="heart-5"/>
                <label for="heart-5">
                </label>
            </a>
        </div>
        <div class="card" data-location="Ohara">
            <a href="">
                <h3><b>Ohara</b></h3>
                <p>West Blue</p>
                <p>Vagas disponiveis:</p>
                <input type="checkbox" id="heart-6"/>
                <label for="heart-6">
                </label>
            </a>
        </div>
    </div>

    <!-- Função para curtir / não está funcionando ainda !-->
</body>

</html>