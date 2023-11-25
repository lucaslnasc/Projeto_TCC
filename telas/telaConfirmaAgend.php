<?php
    include('qrcode.php');

    if (isset($_POST['qr'])) {
        $text = $_POST['qr'];
        $name = md5(time()) . ".png";

        $file = "files/{$name}";
        $options = array(
            'w' => 500,
            'h' => 500
        );

        $generator = new QRCode($text, $options);
        $image = $generator->render_image();
        imagepng($image, $file);
        imagedestroy($image);

        echo "<p>";
        echo "Imagem gerada com sucesso!<br>";
        echo "<a> href='{$file}' target='_blank'>Clique aqui para visualizar seu qr code";
        echo "</p>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaga Certa</title>
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssConfirmaAgend.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="padrao0">
        <div class="logozada">
            <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt=""></a>
        </div>
    <form action="">
        <div class="fundo" method="POST">
            <label id="txtCima">seu agendamento foi realizado com sucesso!</label>
            <div class="linha"></div>
            <span class="spanNome">Nome Completo</span><br>
            <input class="inputNome" type="text"  placeholder="Nome completo">
            <span class="spanVaga">Vaga</span>
            <input class="inputVaga" type="text" placeholder="Vaga">
            <span class="spanTel">Telefone</span>
            <input class="inputTel" type="text" placeholder="Telefone">
            <span class="spanData">Data</span>
            <input type="text" class="inputData"  placeholder="Data">
            <span class="spanPV">placa do veículo</span>
            <input type="text" class="inputPV"  placeholder="placa do veículo">
            <span class="spanHorario">Horário</span>
            <input type="text" class="inputHorario"  placeholder="Horário">
            <button class="btSair">sair</button>
            <button class="btQR" name="qr" id="qr" type="submit">gerar qr code</button>
        </div>
    </form>
</body>
</html>