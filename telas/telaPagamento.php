<?php
  /*include('../bd/conexao.php');


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

*/

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
        <form action="" method="post" class = "">
            <label for="" class="letra">Vaga</label>
            <input type="Vaga" name="Vaga" value="<?php echo $nome_vaga; ?>" aria-describedby="addon-wrapping" readonly required>

            <label for="" class="letra">Data</label>
            <input type="date" aria-describedby="addon-wrapping" id="data" name="data" required="required"">
            <span id="mensagemErro" style="color: red;"></span>

            <label for="" class="letra">Horários disponíveis </label>
            <div class = " littleSpace">
                <input type="button" class= "botoesHorarios" value = "06:00">
                <input type="button" class= "botoesHorarios" value = "09:00">
                <input type="button" class= "botoesHorarios" value = "12:00">
            </div>
            <div class = " littleSpace" >
                <input type="button" class= "botoesHorarios" value = "15:00">
                <input type="button" class= "botoesHorarios" value = "18:00">
                <input type="button" class= "botoesHorarios" value = "21:00">
            </div>
           <div class = " littleSpace"></div>
            <label for="" class="letra">Carga Horária </label>
            <div class = " littleSpace">
                <input type="button" class= "carga" value = "01 Hora">
                <input type="button" class= "carga" value = "02 Horas">
                <input type="button" class= "carga" value = "03 Horas">
            </div>
         <div class = " littleSpace">
                <label for="" class="precoFinal">Preço Final: xxxxxx</label>
            </div >
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
            }
        }
        ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
    function funcaoDif() {
        var data = document.getElementById('data').value;
        var data1 = document.getElementById('Hora').value.getTime;
        var data2 = document.getElementById('HoraAte').value.getTime;
        //var dif = getTimeDiff(data1, data2, 'm');
        var dif = data1 - data2;
        console.log(data);
    }
</script>

</form>
</body>

</html>