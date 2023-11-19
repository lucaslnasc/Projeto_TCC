<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssCadastrar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Vaga Certa</title>
</head>
<body>
<header>

      <div id="headerCima">
      <div class="logozada">
            <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1).png" alt=""></a>
        </div>
      </div>

      <div id="headerBaixo">
        <div id="rodape"></div>
      </div>

      <label for="">

      </label>
    </header>
     
<form action="" method="post">
  <div class="fundinho">
  <div>
    <label for="">Informações Pessoais</label>
  </div>
  <div class="inputBox nomeC">
    <input type="text" required="required">
    <span>Nome Completo</span>
  </div>
  <div class="inputBox cpf">
    <input type="text" required="required" id="cpf">
    <span>CPF</span>
  </div>
  <div class="inputBox eEmail">
    <input type="email" required="required">
    <span>Endereço de E-mail</span>
  </div>
  <div class="inputBox dtNasc">
  <input type="text" name="" id="date" required="required">
    <span>Data de Nascimento</span>
  </div>
  <div class="inputBox tel">
    <input type="text" required="required">
    <span>Telefone</span>
  </div>
  <div class="inputBox senha">
    <input type="password" required="required" id="senha">
    <span>Senha</span>
    <i class="bi bi-eye-fill olho" id="btn-senha" onclick="mostrarSenha()"></i>
  </div>
  <div>

    <label for="">Informações do Veículo</label>
  </div>
  <div class="inputBox nomeC">
    <input type="text" required="required">
    <span>Placa do Veículo</span>
  </div>
  <div class="inputBox cpf">
    <input type="text" required="required" id="cpf">
    <span>Tipo do Veículo</span>
  </div>
  <div class="inputBox eEmail">
    <input type="email" required="required">
    <span>Marca</span>
  </div>
  <div class="inputBox dtNasc">
  <input type="text" name="" id="date" required="required">
    <span>Modelo</span>
  </div>
  <div class="submit-container">
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</div>

  </div>


<!-- SCRIPT MASK DO JQUERY -->
<script type="text/javascript" src="jquery.mask.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#date').mask('00/00/0000');
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