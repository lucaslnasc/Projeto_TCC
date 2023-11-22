<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssAddCartao.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
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
                    <li><a href=""><img src="../img/Subtract.png" alt="Icone de inicio">Inicio</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><img src="../img/User_fill.png" alt="Icone de Perfil">Conta</a></li>
                </ul>
                <hr class="linha">
                <ul class="menuLateral">
                    <li><a href=""><img src="../img/Favorite.png" alt="Icone de Favorito">Favoritos</a></li>
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
</div>
    <div class="container">

<div class="card-container">

    <div class="front">
        <div class="image">
            <img src="chip.png" alt="">
            <img src="visa.png" alt="">
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
            <img src="visa.png" alt="">
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
</div>
</body>