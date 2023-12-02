<?php
    include('../bd/conexao.php');
    include('../bd/protected.php');
    $query = $dbh->prepare('SELECT * FROM vaga');
    $query->execute();

    $vagas = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssVagas.css">
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
         <div id="headerBaixo">
             <div id="rodape"></div>
         </div>
    </header>
    <form action="" method="post">
        <div class = "fundo">
            <div>
                <Label class = letra-Nome>Baratie</Label>
            </div>
            <div>
                <label class="letra-lugar">East Blue</label>
            </div>
            <div>
                <label class="letra-descricao">Um restaurante do balacobaco, q tem um loirin do balacobaco </label>
            </div>
            <div class = "linha-fundo"></div>
            <div>
                <label class="letra-lugar">Preço:</label>
                <Label class="preco">R$ X,XX</Label>
            </div>
        </div>
    </form>

    <label class="letra-linha">Legenda</label>
    <div class="linha-legenda" ></div>
    <div class="legenda-container">
    <div class="quadrado-verde" name = "quadrado-verde"></div>
    <span>Disponível</span>
</div>

<div class="legenda-container">
    <div class="quadrado-cinza"></div>
    <label class="agendada">Agendada</label>
</div>

<div class="legenda-container">
    <div class="quadrado-vermelho"></div>
    <label class = "ocupada">Ocupada</label>
</div>

<div class="legenda-container">
    <div class="quadrado-preferencial"></div>
    <label class ="pref" >Preferencial</label>
</div>

<div class = "campoVagas"> 
    <div>
    <label class="letra-vaga">Escolha sua vaga</label>
    <label class="letra-vaga2">Andar:</label>
    <div class = "linha-Vagas"></div>

 <div class = "grid-pai">
    <div class="grid-container1">
    <?php foreach ($vagas as $vaga): ?>
            <div class="vagaLivre" data-numero="<?php echo $vaga['id_vaga']; ?>"></div>
        <?php endforeach; ?>
        <div class = "vagaLivre" data-numero="2"></div>
        <div class = "vagaLivre" data-numero="3"></div>
        <div class = "vagaLivre" data-numero="4"></div>
    </div>

    <div class="grid-container1">
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
    </div>
 </div>

 <div class = "grid-pai1">
    <div class="grid-container1">
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
    </div>

    <div class="grid-container1">
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
        <div class = "vagaLivre"></div>
    </div>
 </div>

    <div class = "linha-Vagas"></div> 
    </div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            var vagas = document.querySelectorAll('.vagaLivre');
            vagas.forEach(function (vaga) {
                vaga.addEventListener('click', function () {
                    var numeroVaga = this.dataset.numero;
                    window.location.href = '../telas/telaPagamento.php';
                });
            });
        });
    </script>

</body>
</html>