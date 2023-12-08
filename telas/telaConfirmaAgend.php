<?php
include('../bd/protected.php');

include('../bd/conexao.php');

$id_usuario = $_SESSION['id_usuario'];

$query = $dbh->prepare('SELECT * FROM usuario WHERE id_usuario = :id_usuario');
$query->execute(array(':id_usuario' => $_SESSION['id_usuario']));
$dado = $query->fetch();

$query = $dbh->prepare('SELECT * FROM agendamento WHERE id_usuario = :id_usuario');
$query->execute(array(':id_usuario' => $_SESSION['id_usuario']));
$estacionamento = $query->fetch();

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
        <div class="fundo" method="POST">
            <label id="txtCima">seu agendamento foi realizado com sucesso!</label>
            <div class="linha"></div>
            <?php
            echo '<span class="spanNome">Nome Completo</span><br>';
            echo '<input class="inputNome" type="text" placeholder="Nome completo" value="' . $dado['nome'] . '">'
            ?>
            <?php
            echo '<span class="spanVaga">Vaga</span>';
            echo '<input class="inputVaga" type="text" placeholder="Vaga" value="' . $estacionamento['vaga'] . '">';
            ?>
            <?php
            echo '<span class="spanTel">Telefone</span>';
            echo '<input class="inputTel" type="text" placeholder="Telefone" value="' . $dado['telefone'] . '">';
            ?>
            <?php
            echo '<span class="spanData">Data</span>';
            echo '<input type="text" class="inputData" placeholder="Data" value="' . $estacionamento['data_agend'] . '">';
            ?>
            <?php
            echo '<span class="spanPV">placa do veículo</span>';
            echo '<input type="text" class="inputPV" placeholder="placa do veículo" value="' . $dado['placa_veiculo'] . '">';
            ?>
            <?php
            echo '<span class="spanHorario">Horário</span>';
            echo '<input type="text" class="inputHorario" placeholder="Horário" value="' . $estacionamento['horario_inicio'] . '">';
            ?>
            <?php
            echo '<span class="spanQTDhoras">Quantidade de Horas</span>';
            echo '<input type="text" class="inputQTDhoras" placeholder="Quantidade de Horas" value="' . $estacionamento['horario_final'] . '">';
            ?>
            <?php
            echo '<span class="spanModel">Modelo Carro</span>';
            echo '<input type="text" class="inputModel" placeholder="Modelo Carro" value="' . $dado['modelo_veiculo'] . '">';
            ?>
            <a href="telaPrincipal.php"><button class="btSair">sair</button></a>
        </div>
</body>

</html>