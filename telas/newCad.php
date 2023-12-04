<?php
/* include('../bd/conexao.php');

$query = $dbh->prepare('SELECT * FROM veiculo');
$query->execute();

$veiculo = $query->fetchAll();

*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssCadastro.css">
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
    </header>
    <div class = "fundinho">
        <div class = "espaaco">
        <div class = "espacamento">
            <label class="letrao">Informações Pessoais</label>
        </div>
        <div class="">
            <label class="tipos">Nome Completo</label><br>
            <input class="grande" ></input>
        </div>  
        <div class="">
            <label class="tipos">Endereço de Email</label><br>
            <input class="grande"></input>
        </div>  
        <div class="">
            <label class="tipos">Telefone</label><br>
            <input class="pequeno"></input>
        </div>  
        <div class = "ajuste">
            <label class="tipos1">Data Nasimento</label><br>
            <input class="pequeno1"></input>
        </div>
        <div class="">
            <label class="tipos">Senha</label><br>
            <input class="pequeno" type="password"  id="senha"></input>
            <i class="bi bi-eye-fill olho1" id="btn-senha" onclick="mostrarSenha()"></i>
        </div>  
        <div class = "ajuste">
            <label class="tipos1">Repetir senha</label><br>
            <input class="pequeno1"  type="password" id="senha-repeti"></input>
            <i class="bi bi-eye-fill olho2" id="btn-senha1" onclick="mostrarSenha1()"></i>
        </div>
        <div class = "espacamento">
            <label class="letrao">Informações do Veículo</label>
        </div>
        <div class="">
            <label class="tipos">Placa</label><br>
            <input class="pequeno"></input>
        </div>  
        <div class = "ajuste">
            <label class="tipos1">Marca</label><br>
            <input class="pequeno1"></input>
        </div>
        <div class="">
            <label class="tipos">Tipo</label><br>
            <input class="pequeno"></input>
        </div>  
        <div class = "ajuste">
            <label class="tipos1">Modelo</label><br>
            <input class="pequeno1"></input>
        </div>

        <div class = "espaaco">
        <div class = "outroLado">
        <div class="">
            <label class="tipos">Tipo</label><br>
            <input class="pequeno2"></input>
        </div>  
        <div class="miniespaco">
            <label class="tipos">CPF</label><br>
            <input class="pequeno2"></input>
        </div >  
            <div class="espaco2"> 
                <input type="submit" class = "limapar" value = "Limpar">
            </div>
            <div class="espaco3"> 
                <input type="submit" class = "limapar" value = "Limpar">
            </div>
            <div class= "espaco5">
            <input type="submit" class = "cadastrar" value = "cadastrar">
            </div>
        </div>
        </div>
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
  function mostrarSenha1(){
    var inputPass = document.getElementById('senha-repeti')
    var btnShowPass = document.getElementById('btn-senha1')

    if(inputPass.type === 'password'){
      inputPass.setAttribute('type' , 'text')
      btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    }else{
      inputPass.setAttribute('type' , 'password')
      btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
  }
  
</script>
</body>
</html>