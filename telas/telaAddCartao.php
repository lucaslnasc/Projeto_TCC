<?php
include('../bd/protected.php')
    ?>


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
                        <button class="botaoAdicionarCartao" onclick="adicionarCartao()"><a
                                href="telaAddCartao.php">Adicionar Cartão</a></button>
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
                        <span> Titular do Cartão</span>
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
        <form action="../bd/cadastrarCartao.php" method="post" id="formCadastro">
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
            <div class="inputBox">
                <span>NÚMERO DO CARTÃO</span>
                <input type="text" maxlength="20" class="card-number-input" id="nmr_cartao" name="numero_cartao">
            </div>
            <div class="inputBox">
                <span>NOME DO TITULAR</span>
                <input type="text" class="card-holder-input" id="nome_titular" name="nome_cartao">
            </div>
            <div class="flexbox">
                <div class="inputBox">
                    <span>VALIDADE MÊS</span>
                    <select name="validade_mes" id="validade_mes" class="month-input">
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
                    <span>VALIDADE ANO</span>
                    <select name="validade_ano" id="validade_ano" class="year-input">
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
                    <span>CVV</span>
                    <input type="text" maxlength="3" class="cvv-input" id="cvv" name="cvv">
                </div>
            </div>
            <input type="submit" value="Cadastrar" class="submit-btn" onclick="chamarFuncaoDoScript()"> 
        </form>
    </div>


    <script>

        document.querySelector('.card-number-input').oninput = () => {
            document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
        }

        document.querySelector('.card-holder-input').oninput = () => {
            document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
        }

        document.querySelector('.month-input').oninput = () => {
            document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
        }

        document.querySelector('.year-input').oninput = () => {
            document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
        }

        document.querySelector('.cvv-input').onmouseenter = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
        }

        document.querySelector('.cvv-input').onmouseleave = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
        }

        document.querySelector('.cvv-input').oninput = () => {
            document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
        }

    </script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const icon = document.querySelector(".icon");
            const nav = document.querySelector(".nav");

            icon.addEventListener("click", () => nav.classList.toggle("active"));
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <!-- SCRIPT MASK DO JQUERY -->
    <script type="text/javascript" src="jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#nmr_cartao').mask('0000 0000 0000 0000');
        })
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function chamarFuncaoDoScript(event) {
    event.preventDefault();

    const numeroCartao = document.getElementById('nmr_cartao').value;
    const nomeTitular = document.getElementById('nome_titular').value;
    const validadeMes = document.getElementById('validade_mes').value;
    const validadeAno = document.getElementById('validade_ano').value;
    const cvv = document.getElementById('cvv').value;

    if (numeroCartao === '' || nomeTitular === '' || validadeMes === 'month' || validadeAno === 'year' || cvv === '') {
        Swal.fire({
            title: "Por favor, preencha todos os campos",
            icon: "warning"
        });
        return false;
    } else {
        Swal.fire({
            icon: 'success',
            title: 'Cartão Cadastrado com Sucesso',
            preConfirm: () => {
                window.location.href = 'telaCartoes.php';
            }
        });
        return true;

        
    }
}
    </script>
    </div>
</body>
</html>