<?php
include('../bd/conexao.php');

include('../bd/protected.php');

$data_atual = date('Y-m-d');
$nome_vaga = "";

$id_usuario = $_SESSION['id_usuario'];

if (isset($_GET['id'])) {
    $idVaga = $_GET['id'];

    $query = $dbh->prepare('SELECT nome_vaga FROM vaga WHERE id_vaga = :id');
    $query->bindParam(':id', $idVaga, PDO::PARAM_INT);
    $query->execute();

    $vaga = $query->fetch(PDO::FETCH_ASSOC);

    if ($vaga) {
        $nome_vaga = $vaga['nome_vaga'];
    } else {
        echo 'alert("Vaga Não Encontrada");';
    }


    if (isset($_POST['horas_selecionadas'])) {
        $horas_selecionadas = intval($_POST['horas_selecionadas']);
        $preco_por_hora = 10; // Valor inicial por hora
        $preco_final = $horas_selecionadas * $preco_por_hora;
    } else {
        $preco_final = 0; // Se não houver horas selecionadas, o preço final é 0
    }
}

$query = $dbh->prepare('SELECT numero_cartao FROM cartao WHERE id_usuario = :id_usuario');
$query->execute(array(':id_usuario' => $_SESSION['id_usuario']));
$cartoes = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssPagamento.css">
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
    <div class="container row mx-auto">
        <div class="area-agendamento">
            <label class="letra-agendamento">Agendamento</label>
            <label class="letra-pagamento">Formas de Pagamento</label>
            <div class="linha"></div>
            <div>
                <label class="letra-Descriocao">Descrição</label>
            </div>
        </div>
        <form action="../bd/pagamentoVaga.php" method="post" id="formPagamento">
            <label for="" class="letra">Vaga</label>
            <input type="Vaga" name="vaga" value="<?php echo $nome_vaga; ?>" aria-describedby="addon-wrapping" readonly required>

            <label for="" class="letra">Data</label>
            <input type="date" aria-describedby="addon-wrapping" id="data" name="data_agend" value="<?php echo $data_atual; ?>" readonly required="required">
            <span id="mensagemErro" style="color: red;"></span>
            <label for="" class="letra">Horario Inicio</label>
            <input type="time" name="horario_inicio" id="" class="dataIni">
            <label for="" class="letra">Quantidade de Horas</label>
            <input type="range" name="horas_selecionadas" value="1" min="1" max="3" oninput="atualizarPrecoFinal(this.value)">
            <output id="outputHoras">1</output>
            <div class="littleSpace">
                <label for="" class="precoFinal" id="precoFinal">Preço Final: R$<?php echo $preco_final; ?></label>
            </div>
            <a href="telaVagas.php"><input type="button" class="input-voltar" value="Voltar"></a>

    </div>

    <div class="linha-vertical"></div>

    <div class="container row mx-auto">
        <div class="fundinho">
            <div>
                <label for="" class="letra-fundinho3">Cartões</label>
            </div>
            <div class="linha1"></div>
            <?php
            if (empty($cartoes)) {
                echo '<label for="" class="labelNenhum">Nenhum Cartão Cadastrado</label>';
                echo '<a href="telaAddCartao.php"><button type="button" class="btCadCard">Cadastrar Cartão</button></a>';
            } else {
                foreach ($cartoes as $cartao) {
                    if (empty($cartao)) {
                        continue;
                    }
                    $numeroCartao = $cartao['numero_cartao'];
                    $ultimosDigitos = substr($numeroCartao, -4);
                    echo '<label for="" class="letra-fundinho1">Cartão: XXXX' . $ultimosDigitos . '</label>';
                    echo '<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">';
                    echo '<input type="submit" class="efetuar-pagamento" value="Efetuar Pagamento">';
                }
            }
            ?>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

            <script>
                function atualizarPrecoFinal(valor) {
                    document.getElementById('outputHoras').innerHTML = valor;
                    var preco_por_hora = 10;
                    var preco_final = valor * preco_por_hora;
                    document.getElementById('precoFinal').innerHTML = 'Preço Final: R$' + preco_final.toFixed(2);
                }
                document.addEventListener('DOMContentLoaded', function() {
                    atualizarPrecoFinal(document.querySelector('input[name="horas_selecionadas"]').value);
                });
            </script>

            <script>
                function atualizarHorarioFinal(valor) {
                    var horario_inicio = document.getElementById('horario_inicio').value;
                    var horas_selecionadas = parseInt(valor);

                    // Converta o horário de início para minutos
                    var partesHorario = horario_inicio.split(":");
                    var minutos_inicio = parseInt(partesHorario[0]) * 60 + parseInt(partesHorario[1]);

                    // Calcule o horário final em minutos
                    var minutos_final = minutos_inicio + horas_selecionadas * 60;

                    // Converta os minutos finais de volta para o formato de hora
                    var horas_final = Math.floor(minutos_final / 60);
                    var minutos_final_residuais = minutos_final % 60;

                    // Atualize o campo de horário final
                    document.getElementById('horario_final').value = pad(horas_final) + ":" + pad(minutos_final_residuais);
                }

                function pad(numero) {
                    return numero < 10 ? "0" + numero : numero;
                }
            </script>

            </form>
</body>

</html>