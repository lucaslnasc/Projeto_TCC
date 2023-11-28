<?php
include('../bd/conexao.php');

$query = $dbh->prepare('SELECT * FROM veiculo');
$query->execute();

$veiculo = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssCadastrar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Vaga Certa</title>
</head>
<body>
<header>

      <div id="headerCima">
      <div class="logozada">
            <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt=""></a>
        </div>
      </div>

      <div id="headerBaixo">
        <div id="rodape"></div>
      </div>

      <label for="">

      </label>
    </header>
     
<form action="../bd/cadastrarUser.php" method="post">
  <div class="fundinho">
  <div>
    <label for="">INFORMAÇÕES PESSOAIS</label>
  </div>
  <div class="inputBox nomeC">
    <span>Nome Completo</span>
    <input type="text" required="required" id="nome" name="nome">
    
  </div>
  <div class="inputBox cpf">
    <span>CPF</span>
    <input type="text" required="required" id="cpf" name="cpf">
    
  </div>
  <div class="inputBox eEmail">
    <span>Endereço de E-mail</span>
    <input type="email" required="required" id="email" name="email">
    
  </div>
  <div class="inputBox dtNasc">
      <span>Data de Nascimento</span>
      <input type="text" name="data_nasc" required="required" id="data_nasc">

  </div>
  <div class="inputBox tel">
    <span>Telefone</span>
    <input type="text" required="required" id="telefone" name="telefone"> 
    
  </div>
  <div class="inputBox senha">
     <span>Senha</span>
     <input type="password" required="required" id="senha" name="senha">
   
    <i class="bi bi-eye-fill olho" id="btn-senha" onclick="mostrarSenha()"></i>
  </div>
  <div>

    <label for="">INFORMAÇÕES DO VEÍCULO</label>
  </div>
  <div class="inputBox nomeC">
    <span>Placa do Veículo</span>
    <input type="text" required="required" id="placa_veiculo" name="placa_veiculo">
    
  </div>
  <div class="inputBox cpf">
  <span>Tipo do Veículo</span>
    <select name="tipo_veiculo" id="tipo_veiculo" required="required">
    <?php
      foreach ($veiculo as $linha) {
        echo '<option value="' . $linha['categoria_veiculo'] . '">' . $linha['categoria_veiculo'] . '</option>';
      }
    ?>
    </select>
    
</div>
  <div class="inputBox eEmail">
    <span>Marca</span>
    <input type="text" required="required" id="marca_veiculo" name="marca_veiculo">
    
  </div>
  <div class="inputBox dtNasc">
  <span>Modelo</span>
  <input type="text" name="modelo_veiculo" id="modelo_veiculo" required="required">
    
  </div>
  <div class="submit-container">
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</div>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- SCRIPT MASK DO JQUERY -->
<script type="text/javascript" src="jquery.mask.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $('#data_nasc').mask('00/00/0000');
    $('#cpf').mask('000.000.000-00');
    $('#telefone').mask('(00) 0 0000-0000');
  })

  
</script>

<!-- SCRIPT DO OLHO SENHA -->
<script>
  function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type === 'password'){
      inputPass.setAttribute('type' , 'text')
      btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    }else{
      inputPass.setAttribute('type' , 'password')
      btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
  }
</script>
</form>
</body>
</html>