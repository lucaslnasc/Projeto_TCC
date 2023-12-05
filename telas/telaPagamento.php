<?php
  include('../bd/conexao.php');


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
        <form action="" method="post">
            <label for="" class="letra">Vaga</label>
            <input type="Vaga" name="Vaga" value="<?php echo $nome_vaga; ?>" aria-describedby="addon-wrapping" readonly required>
            <label for="" class="letra">Data</label>
            <input type="text" aria-describedby="addon-wrapping" id="data" name="data" required="required" oninput="validarData()">
            <span id="mensagemErro" style="color: red;"></span>
            <label for="" class="letra">Horário</label>
            <label for="" class="deLabel">De:</label>
            <input type="Hora" aria-describedby="addon-wrapping" required>
            <label for="" class="ateLabel">Até:</label>
            <input type="HoraAte" aria-describedby="addon-wrapping" required>
            <label for="" class="precoFinal">Preço Final: xxxxxx</label>
            <a href="telaVagas.php"><input type="button" class="input-voltar" value="Voltar"></a>

        </form>
    </div>

    <div class="linha-vertical"></div>

    <div class="container row mx-auto">
        <form action="" method="post">
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
                echo '<div class="linha1"></div>';
            }
        }
        ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#data').mask('00/00/0000');
  });

  function validarData() {
    var inputData = $('#data').val();
    var dataAtual = new Date();
    var dataInserida = new Date(inputData);

    if (dataInserida < dataAtual) {
      $('#mensagemErro').text('Data Inválida');
      return false;
    } else {
      $('#mensagemErro').text('');
      return true;
    }
  }

</script>

</form>
</body>

</html>