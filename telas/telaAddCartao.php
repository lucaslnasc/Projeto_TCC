<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssAddCartao.css">
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
                        <a href="telaAddCartao.php"><button class="botaoAdicionarCartao" onclick="adicionarCartao()">Adicionar Cartão</button></a>
                    </li>
                </div>
                <hr class="linha">

                <footer class="inferiorLateral">
                    <a href="telaLogin.php"><i class="bi bi-box-arrow-left"></i>Sair</a>
                </footer>
            </div>
        </div>
    </header>
</div>
    <div class="container">

<div class="card-container">

    <div class="front">
        <div class="image">
            <img src="../img/chip.png" alt="">
            <img src="../img/visa.png" alt="">
        </div>
        <div class="card-number-box">################</div>
        <div class="flexbox">
            <div class="box">
                <span>  Titular do Cartão</span>
                <div class="card-holder-name">nome completo</div>
            </div>
            <div class="box">
                <span>Validade</span>
                <div class="expiration">
                    <span class="exp-month">##</span>
                    <span class="exp-year">####</span>
                </div>
            </div>
        </div>
    </div>

    <div class="back">
        <div class="stripe"></div>
        <div class="box">
            <span>cvv</span>
            <div class="cvv-box"></div>
            <img src="../img/visa.png" alt="">
        </div>
    </div>

</div>

<form action="">
    <div class="inputBox">
        <span>número do cartão</span>
        <input type="text" maxlength="16" class="card-number-input">
    </div>
    <div class="inputBox">
        <span>nome do titular</span>
        <input type="text" class="card-holder-input">
    </div>
    <div class="flexbox">
        <div class="inputBox">
            <span>Validade Mês</span>
            <select name="" id="" class="month-input">
                <option value="month" selected disabled>Mês</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="inputBox">
            <span>Validade Ano</span>
            <select name="" id="" class="year-input">
                <option value="year" selected disabled>Ano</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
        </div>
        <div class="inputBox">
            <span>cvv</span>
            <input type="text" maxlength="3" class="cvv-input">
        </div>
    </div>
    <input type="submit" value="submit" class="submit-btn">
</form>

</div>    






<script>

document.querySelector('.card-number-input').oninput = () =>{
document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}

</script>

<script>
            document.addEventListener("DOMContentLoaded", function () {
                const icon = document.querySelector(".icon");
                const nav = document.querySelector(".nav");

                icon.addEventListener("click", () => nav.classList.toggle("active"));
            });
</script>
</div>
</body>