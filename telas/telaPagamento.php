<?php
  include('../bd/conexao.php');
  include('../bd/protected.php');

  $nome_vaga = ""; // Inicialize a variável para evitar o aviso de "Undefined variable"

  if (isset($_GET['id'])) {
      $idVaga = $_GET['id'];
      echo "ID da Vaga: " . $idVaga;
  
      $query = $dbh->prepare('SELECT nome_vaga FROM vaga WHERE id = :id');
      $query->bindParam(':id', $idVaga, PDO::PARAM_INT);
      $query->execute();
  
      $vaga = $query->fetch(PDO::FETCH_ASSOC);
  
      if ($vaga) {
          $nome_vaga = $vaga['nome_vaga'];
      } else {
          $nome_vaga = "Vaga não encontrada";
      }
  }



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
            <input type="Vaga" name="Vaga" value="<?php echo $nome_vaga; ?>" aria-describedby="addon-wrapping" required>
            <label for="" class="letra">Data</label>
            <input type="Data" aria-describedby="addon-wrapping" required>
            <label for="" class="letra">Hora</label>
            <input type="Hora" aria-describedby="addon-wrapping" required>
            <input type="submit" class="input-voltar" value="Voltar">
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
                <div>
                    <label id="cartaoX" for="" class="letra-fundinho1"><?php  ?></label>
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                </div>
            
                <div>
                    <label id="cartaoX" for="" class="letra-fundinho">Cartão: XXXX5467</label>
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                </div>
            
                <div>
                    <label id="cartaoX" for="" class="letra-fundinho">Cartão: XXXX1234</label>
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                </div>
                <div class="linha1"></div>
                <div>
                    <input type="button" class="efetuar-pagamento" value="Efetuar Pagamento">
                </div>

            </div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- SCRIPT MASK DO JQUERY -->
<script type="text/javascript" src="jquery.mask.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $('#cartaoX').mask('Cartão: XXXX');

  })

  
</script>

</body>

</html>