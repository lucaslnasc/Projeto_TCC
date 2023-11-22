<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssPerfil.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                    <li><a href=""><i class="bi bi-house"></i>Inicio</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><i class="bi bi-person"></i>Conta</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a><i class="bi bi-bookmark-heart"></i>Favoritos</a></li>
                </ul>
                <hr class="linha">
                <div class="menuLateral bCartao">
        <li onmouseover="mostrarBotaoAdicionarCartao()" onmouseout="esconderBotaoAdicionarCartao()">
            <a href="telaAjustes_Cartoes.php">
            <i class="bi bi-credit-card-2-front-fill"></i>Cartões >
            </a>
            <button class="botaoAdicionarCartao" onclick="adicionarCartao()">Adicionar Cartão</button>
        </li>
    </div>
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

    <div class="fundo">
        <span class="bv">BEM-VINDO #####</span><BR></BR>
        <span class="inf">SUAS INFORMAÇÕES PESSOAIS</span>
        <div class="linha1"></div>
        <div class="element">
            <div>
                <span>ENDEREÇO DE E-MAIL</span><i class="bi bi-pencil-square"></i><br>
                <input type="text" name="" id="email">
            </div>
            <div>
                <span>CPF</span><br>
                <input type="text" id="cpf">
            </div>
            <div>
                <span>TELEFONE</span><i class="bi bi-pencil-square"></i><br>
                <input type="text" id="telefone">
            </div>
            <div>
                <span>DATA DE NASCIMENTO</span><br>
                <input type="text" id="dtNasc">
            </div>
        </div>
        <span class="inf">INFORMAÇÕES DO SEU VEÍCULO</span>
        <div class="linha1"></div>
        <div class="element">
            <div>
                <span>TIPO DE VEÍCULO</span><i class="bi bi-pencil-square"></i><br>
                <input type="text" name="" id="tVeiculo">
            </div>
            <div>
                <span>PLACA</span><i class="bi bi-pencil-square"></i><br>
                <input type="text" id="placa">
            </div>
            <div>
                <span>MARCA</span><i class="bi bi-pencil-square"></i><br>
                <input type="text" id="marca">
            </div>
            <div>
                <span>MODELO</span><i class="bi bi-pencil-square"></i>  <br>
                <input type="text" id="modelo">
            </div>
        </div>
        <div class="button-group">
            <button class="altS">ALTERAR SENHA</button>
            <button class="salv">SALVAR</button>
        </div>
    </div>

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