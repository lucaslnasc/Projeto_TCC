<?php
include('../bd/protected.php');

include('../bd/conexao.php');


$query = $dbh->prepare("SELECT * FROM cartao WHERE id_usuario = :id_usuario");
$query->execute(array(':id_usuario' => $_SESSION['id_usuario']));
$info = $query->fetchAll();
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
                <ul class="menuLateral">
                    <li><a href="visualizarAgend.php"><i class="bi bi-calendar2-check"></i>Agendadas</a></li>
                </ul>
                <hr class="linha">
                <div class="menuLateral bCartao">
                    <li onmouseover="mostrarBotaoAdicionarCartao()" onmouseout="esconderBotaoAdicionarCartao()">
                        <a href="">
                            <i class="bi bi-credit-card-2-front-fill"></i>Cartões >
                        </a>
                        <a href="telaAddCartao.php"><button class="botaoAdicionarCartao" onclick="adicionarCartao()">Adicionar Cartão</button></a>
                    </li>
                </div>
                <hr class="linha">

                <footer class="inferiorLateral">
                    <a href="../bd/logout.php"><i class="bi bi-box-arrow-left"></i>Sair</a>
                </footer>
            </div>
        </div>
        <div id="headerBaixo">
            <div id="rodape"></div>
        </div>
    </header>
    <div class="grid-container">
        <?php
        foreach ($info as $infor) {
            echo '<div class = "card" >';
            echo '<nav class ="nav">';
            echo '<span class="icon"><i class="bi bi-three-dots-vertical"></i></span>';
            echo '<ul>';
            echo '<li>';
            echo '<button class="revBt" onclick="confirmarRemocao(' . $infor['id_cartao'] . ')">Remover</button>';
            echo '</li>';
            echo '</ul>';
            echo '</nav>';
            echo '<br>';

            echo '<div class="infCartao">';
            echo '<span>' . 'Número do Cartão' . '</span>' . '<br>';
            echo '<label for = "" ' . '<span>' . $infor['numero_cartao'] . '</span>' . '</label>';
            echo '<p>' . '</p>';
            echo '<span>' . 'Expira em:' . '</span>' . '<br>';
            echo '<label for = "" ' . '<span>' . $infor['validade_mes'] . '/' . $infor['validade_ano'] . '</span>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const icons = document.querySelectorAll(".icon");
        icons.forEach(icon => {
            icon.addEventListener("click", () => {
                const nav = icon.closest('.card').querySelector('.nav'); // Encontra a navegação correspondente ao ícone clicado
                nav.classList.toggle("active");
            });
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmarRemocao(id_cartao) {
        Swal.fire({
            title: "Confirmação",
            text: "Tem certeza que deseja remover o cartão?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sim, Delete"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `../bd/removerCartao.php?id_cartao=${id_cartao}`;
            }
        });
    }
</script>


</body>

</html>