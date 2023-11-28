<?php
    include('../bd/protected.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssCartao.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
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
                        <a href="telaAddCartao.php">
                            <i class="bi bi-credit-card-2-front-fill"></i>Cartões >
                        </a>
                        <button class="botaoAdicionarCartao" onclick="adicionarCartao()"><a href="telaAddCartao.php">Adicionar Cartão</a></button>
                    </li>
                </div>
                <hr class="linha">

                <footer class="inferiorLateral">
                    <a href="telaLogin.php"><i class="bi bi-box-arrow-left"></i>Sair</a>
                </footer>
            </div>
        </div>
    </header>
        <div class="painelCartao">
            <nav class="nav">
                <span class="icon"><i class="bi bi-three-dots-vertical"></i></span>
                <ul>
                    <li><button class="revBt">Remover</button></li>
                </ul>
            </nav>
            <br>

            <div class="infCartao">
                <span>Número do Cartão</span><br>
                <input type="text">
                <p></p>
                <span>Expira em:</span><br>
                <input type="text" placeholder="00/0000">
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const icon = document.querySelector(".icon");
                const nav = document.querySelector(".nav");

                icon.addEventListener("click", () => nav.classList.toggle("active"));
            });
        </script>

</body>
</html>