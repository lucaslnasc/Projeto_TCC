<?php

include("../bd/conexao.php");

$estacionamento = 'Baratie';
if (isset($_POST['estacionamento'])) {
    $estacionamento = $_POST['estacionamento'];
}

$query = $dbh->prepare("SELECT * FROM estacionamento WHERE nome_estacionamento LIKE :estacionamento;");
$query->execute(
    array(
        ':estacionamento' => "%$estacionamento%"
    )
);

$local = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./CSS/cssPrincipal.css">
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
        <div id="headerMeio">
            <div class="novoMenu">
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><i class="bi bi-house"></i>Inicio</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><i class="bi bi-person"></i>Conta</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><i class="bi bi-bookmark-heart"></i>Favoritos</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href="telaAjustes_Cartoes.php"><i class="bi bi-credit-card-2-front-fill"></i>Cartão</a></li>
                </ul>
                <hr class="linha">

                <footer class="inferiorLateral">
                    <a href="telaLogin.php"><i class="bi bi-box-arrow-left"></i>Sair</a>
                </footer>
            </div>
        </div>
        <div id="headerBaixo">
            <div id="rodape"></div>
        </div>
    </header>

    <div class="meio">
        <div class="search">
            <form action="" method="post">
                <input type="text" id="pesquisar" name="estacionamento" placeholder="Pesquisa">

                <input type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i>
                </input>
            </form>
        </div>
        <div class="grid-container">
                <?php
                foreach ($local as $l) {
                    echo '<div class="grid-card">';
                    echo '<a href="">';
                    echo '<h3>' . '<br>' . $l['nome_estacionamento'] . '</b>' . '</h3>';
                    echo '<p>' . $l['localizacao'] . '</p>';
                    echo '<p>' . 'Vagas Disponiveis: ' . $l['vagas_disponiveis'] . '</p>';
                    echo '<input type="checkbox" id="heart" />';
                    echo '<label for="heart"></label>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Função para curtir / não está funcionando ainda !-->
</body>

</html>