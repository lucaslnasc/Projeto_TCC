<?php

include('../bd/conexao.php');

include('../bd/protected.php');

$id_usuario =  $_SESSION['id_usuario'];

$query = $dbh->prepare("SELECT * FROM usuario where id_usuario=:id_usuario");
$query->execute(
    array(
        ':id_usuario' => $id_usuario
    )
);

$pessoa = $query->fetch();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssPerfil.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

    <title>Vaga Certa</title>
</head>

<body class="padrao0">
    <header>
        <div id="headerCima">
            <div class="logozada">
                <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt="Logo do sistema"></a>
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
                    <a href="../bd/logout.php"><i class="bi bi-box-arrow-left"></i>Sair</a>
                </footer>
            </div>

        </div>
        <div id="headerBaixo">
            <div id="rodape"></div>
        </div>
    </header>
    <form action="../bd/atualizarUser.php" method="post">
        <?php
        echo '<div class="bv">' . $pessoa['email'] . '</div>';
        ?>
        <br>

        <div class="bv1"><a class="bv2" href="telaTrocaSenha.php">Alterar senha</a></div>
        <div>
            <div class="inf">SUAS INFORMAÇÕES PESSOAIS</div>
            <div class="linha1"></div>
            <div class="element">
                <div>
                    <?php
                    echo '<input type="hidden" name="id_usuario" id="id_usuario" value="' . $pessoa['id_usuario'] . '">';
                    ?>
                    <label Class="letraEsq">NOME</label><i class="bi bi-pencil-square pp"></i><br>
                    <?php
                    echo '<input type="text" name="nome" id="nome" value="' . $pessoa['nome'] . '">';
                    ?>
                </div>
                <div>
                    <label Class="letraDir">CPF</label><br>
                    <?php
                    echo '<input type=text" name="cpf"  disabled id="cpf" value="' . $pessoa['cpf'] . '">';
                    ?>
                </div>
                <br>
                <div>
                    <label Class="letraEsq">TELEFONE</label> <i class="bi bi-pencil-square pp"></i><br>
                    <?php
                    echo '<input type=text name="telefone" maxlength="16" id="telefone" value="' . $pessoa['telefone'] . '">';
                    ?>
                </div>
                <div>
                    <label Class="letraDir">DATA DE NASCIMENTO</label><br>
                    <?php
                    echo '<input type=text name="dtNasc" disabled id="dtNasc" value="' . $pessoa['data_nasc'] . '">';
                    ?>
                </div>
            </div>
            <div class="inf">INFORMAÇÕES DO SEU VEÍCULO</div>
            <div class="linha1"></div>
            <div class="element">
                <div>
                    <label class="letraEsq">TIPO VEÍCULO</label><i class="bi bi-pencil-square pp"></i><br>
                    <?php
                    echo '<input type="text" name="tipo_veiculo" id="tipo_veiculo" value="' . $pessoa['tipo_veiculo'] . '">';
                    ?>
                </div>
                <div>
                    <label Class="letraDir">PLACA</label><i class="bi bi-pencil-square ppp"></i><br>
                    <?php
                    echo '<input type="text" name ="placa_veiculo" id="placa_veiculo" value="' . $pessoa['placa_veiculo'] . '">';
                    ?>
                </div>
                <br>
                <div>
                    <label Class="letraEsq2">MARCA</label><i class="bi bi-pencil-square pp"></i><br>
                    <?php
                    echo '<input type="text" name="marca_veiculo" id="marca_veiculo" value="' . $pessoa['marca_veiculo'] . '">';
                    ?>
                </div>
                <div>
                    <label Class="letraDir2">MODELO</label><i class="bi bi-pencil-square ppp"></i><br>
                    <?php
                    echo '<input type="text" name="modelo_veiculo" id="modelo_veiculo" value="' . $pessoa['modelo_veiculo'] . '">';
                    ?>
                </div>
                <input type="submit" class="salvar" value="Salvar alterações">
            </div>
    </form>




    <script>
        function mostrarBotaoAdicionarCartao() {
            const botaoAdicionar = document.querySelector('.botaoAdicionarCartao');
            botaoAdicionar.style.display = 'inline-block';
        }

        function esconderBotaoAdicionarCartao() {
            const botaoAdicionar = document.querySelector('.botaoAdicionarCartao');
            botaoAdicionar.style.display = 'none';
        }

        function adicionarCartao() {

        }
    </script>
</body>

</html>