<?php
  include('../bd/conexao.php');

  $data_atual = date('Y-m-d'); 
  $nome_vaga = ""; 

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
  }
    
  $query = $dbh->prepare('SELECT numero_cartao FROM cartao');
  $query->execute();
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
            <input type="Vaga" name="Vaga" value="<?php echo $nome_vaga; ?>" aria-describedby="addon-wrapping" readonly required>

            <label for="" class="letra">Data</label>
            <input type="date" aria-describedby="addon-wrapping" id="data" name="data" value="<?php echo $data_atual; ?>" readonly required="required">
            <span id="mensagemErro" style="color: red;"></span>

            <label for="" class="letra">Horários disponíveis </label>
            <div class="littleSpace">
                <input type="button" class="botoesHorarios" onclick="selecionarHorario(this)" value="06:00" name="horario">
                <input type="button" class="botoesHorarios" onclick="selecionarHorario(this)" value="09:00" name="horario">
                <input type="button" class="botoesHorarios" onclick="selecionarHorario(this)" value="12:00" name="horario">
            </div>
            <div class="littleSpace">
                <input type="button" class="botoesHorarios" onclick="selecionarHorario(this)" value="15:00" name="horario">
                <input type="button" class="botoesHorarios" onclick="selecionarHorario(this)" value="18:00" name="horario">
                <input type="button" class="botoesHorarios" onclick="selecionarHorario(this)" value="21:00" name="horario">
            </div>

            <div class="littleSpace"></div>
                <label for="" class="letra">Carga Horária </label>
                <div class = " littleSpace">
                <input type="button" class="carga" onclick="selecionarCarga(this)" value="01 Hora" name="carga_horaria">
                <input type="button" class="carga" onclick="selecionarCarga(this)" value="02 Horas" name="carga_horaria">
                <input type="button" class="carga" onclick="selecionarCarga(this)" value="03 Horas" name="carga_horaria">
            </div>
            <div class = " littleSpace">
                <label for="" class="precoFinal">Preço Final: xxxxxx</label>
            </div >
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
    let horarioSelecionado = null;
    let cargaHorariaSelecionada = null;

    function selecionarHorario(botao) {
        // Desmarcar todos os outros botões de horário
        const botoesHorarios = document.querySelectorAll('.botoesHorarios');
        botoesHorarios.forEach(botao => botao.classList.remove('selecionado'));

        // Marcar o botão de horário clicado
        botao.classList.add('selecionado');

        // Atualizar a variável com o horário selecionado
        horarioSelecionado = botao.innerText;
    }

    function selecionarCarga(botao) {
        // Desmarcar todos os outros botões de carga horária
        const botoesCarga = document.querySelectorAll('.carga');
        botoesCarga.forEach(botao => botao.classList.remove('selecionado'));

        // Marcar o botão de carga horária clicado
        botao.classList.add('selecionado');

        // Atualizar a variável com a carga horária selecionada
        cargaHorariaSelecionada = botao.innerText;
    }

    // Função para validar e enviar o formulário
    function efetuarPagamento() {
        if (horarioSelecionado && cargaHorariaSelecionada) {
            // Atualizar os inputs no formulário antes de enviar
            document.getElementById('horario').value = horarioSelecionado;
            document.getElementById('carga_horaria').value = cargaHorariaSelecionada;

            // Enviar o formulário
            document.getElementById('formPagamento').submit();
        } else {
            alert('Por favor, selecione horário e carga horária antes de efetuar o pagamento.');
        }
    }
</script>

</form>
</body>

</html>