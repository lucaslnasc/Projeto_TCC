<?php
//include('../bd/protected.php');

include('../bd/conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaga Certa</title>
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssFavoritos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <body class="padrao0">
        <header>
            <div id="headerCima">
                <div class="logozada">
                    <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt=""></a>
                </div>
            </div>
            <div id="headerMeio">
                <div class="novoMenu">
                    <hr class="linha">
                    <ul class="menuLateral">
                        <li><a href="telaPrincipal.php"><i class="bi bi-house"></i>Inicio</a></li>
                    </ul>
                    <hr class="linha">
                    <ul class="menuLateral">
                        <li><a href="telaPerfil.php"><i class="bi bi-person"></i>Conta</a></li>
                    </ul>
                    <hr class="linha">
                    <ul class="menuLateral">
                        <li><a href="telaFavorito.php"><i class="bi bi-bookmark-heart"></i>Favoritos</a></li>
                    </ul>
                    <hr class="linha">
                    <div class="menuLateral bCartao">
                        <li onmouseover="mostrarBotaoAdicionarCartao()" onmouseout="esconderBotaoAdicionarCartao()">
                            <a href="telaCartoes.php">
                                <i class="bi bi-credit-card-2-front-fill"></i>Cartões >
                            </a>
                            <a href="telaAddCartao.php"><button class="botaoAdicionarCartao" onclick="adicionarCartao()">Adicionar Cartão</button></a>
                        </li>
                    </div>
                    <hr class="linha">

                    <footer class="inferiorLateral">
                        <a href="telaLogin.php"><i class="bi bi-box-arrow-left"></i>Sair</a>
                    </footer>
                </div>
                <div id="headerBaixo">
                    <div id="rodape"></div>
                </div>
            </div>
        </header>

        <div class="meio">
            <div class="search">
                <form action="" method="post">
                    <input type="text" class="search-input" id="pesquisar" name="estacionamento" placeholder="Pesquisa">
                    <input type="submit" class="primary" value="Pesquisar"></input>
                </form>
            </div>
            <div class="grid-container">
            </div>
        </div>

        <script src="../js/script.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const icon = document.querySelector(".icon");
                const nav = document.querySelector(".nav");

                icon.addEventListener("click", () => nav.classList.toggle("active"));
            });
        </script>
    </body>

</html>