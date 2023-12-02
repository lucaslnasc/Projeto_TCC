<?php
  include('../bd/protected.php');
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

      <div class="bv">Enaoseioqnaoseioqla@gmail.com</div><br>
      <div class="bv1"><a class="bv2" href="">Alterar senha</a></div>
      <div></div>
        <div class="inf">SUAS INFORMAÇÕES PESSOAIS</div>
        <div class="linha1"></div> 
        <div class="element">
            <div>
            <label Class="letraEsq">NOME</label><i class="bi bi-pencil-square pp" ></i><br>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
            <label Class="letraDir">CPF</label><br>
                <input type="text" name= "cpf" id="cpf">
            </div>
            <br>
            <div>
           <label Class="letraEsq">TELEFONE</label> <i class="bi bi-pencil-square pp" ></i><br>
                <input type="text" name= "telefone" id="telefone">
            </div>
            <div>
            <label Class="letraDir">DATA DE NASCIMENTO</label><br>
                <input type="text" name= "dtNasc" id="dtNasc">
            </div>
        </div>
        <div class="inf">INFORMAÇÕES DO SEU VEÍCULO</div>
     <div class="linha1"></div>
        <div class="element">
            <div>
            <label class="letraEsq">TIPO VEÍCULO</label><i class="bi bi-pencil-square pp"></i><br>
                <input type="text" name= "tipoP" id="tipoP">
            </div>
            <div>
            <label Class="letraDir">PLACA</label><i class="bi bi-pencil-square ppp"></i><br>
                <input type="text" name= "placa" id="placa">
            </div>
            <br>
            <div>
            <label Class="letraEsq2">MARCA</label><i class="bi bi-pencil-square pp"></i><br>
                <input type="text" name= "marca" id="marca">
            </div>
            <div>
            <label Class="letraDir2">MODELO</label><i class="bi bi-pencil-square ppp"></i><br>
                <input type="text" name= "modelo" id="modelo">
            </div>
            <input type="submit" class="salvar" value="Salvar alterações">
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
</html>