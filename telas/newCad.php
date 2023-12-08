<?php
include('../bd/conexao.php');

$query = $dbh->prepare('SELECT * FROM veiculo');
$query->execute();

$veiculo = $query->fetchAll();

$teste = $dbh->prepare('SELECT sexo FROM usuario');
$teste->execute();

$sexoS = $teste->fetchAll();
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
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
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
  <div class="fundinho">
    <div class="espaaco">
      <div class="espacamento">
        <label class="letrao">Informações Pessoais</label>
      </div>
      <form id="formCadastro" action="../bd/cadastrarUser.php" method="post">
        <div class="">
          <label class="tipos">Nome Completo</label><br>
          <input class="grande" required="required" name="nome" id="nome"></input>
        </div>
        <div class="">
          <label class="tipos">Endereço de Email</label><br>
          <input class="grande" type="email" required="required" name="email" id="email"></input>
        </div>
        <div class="">
          <label class="tipos">Telefone</label><br>
          <input class="pequeno" id="telefone" required="required" name="telefone"></input>
        </div>
        <div class="ajuste">
          <label class="tipos1">Data Nascimento</label><br>
          <input class="pequeno1" id="data_nasc" required="required" name="data_nasc"></input>
        </div>
        <div class="">
          <label class="tipos">Senha</label><br>
          <input class="pequeno" type="password" id="senha" required="required" name="senha" onchange="confereSenha()"></input>
          <i class="bi bi-eye-fill olho1" id="btn-senha" onclick="mostrarSenha()"></i>
        </div>
        <div class="ajuste">
          <label class="tipos1">Repetir senha</label><br>
          <input class="pequeno1" type="password" id="senha-repeti" required="required" name="conf_senha" onchange="confereSenha()"></input>
          <i class="bi bi-eye-fill olho2" id="btn-senha1" onclick="mostrarSenha1()"></i>
        </div>
        <div class="espacamento">
          <label class="letrao">Informações do Veículo</label>
        </div>
        <div class="">
          <label class="tipos">Placa</label><br>
          <input class="pequeno" maxlength="7" required="required" name="placa_veiculo" id="placa_veiculo"></input>
        </div>
        <div class="ajuste">
          <label class="tipos1">Marca</label><br>
          <input class="pequeno1" required="required" name="marca_veiculo" id="marca_veiculo"></input>
        </div>
        <div class="">
          <label class="tipos">Tipo</label><br>
          <select name="tipo_veiculo" id="" class="pequeno">
          <option value="masculino">Carro</option>
                <option value="feminino">Moto</option>
            <?php
            foreach ($veiculo as $linha) {
              echo '<option value ="' . $linha['cod'] . '">' . $linha['categoria_veiculo'] . '</option>';
            }
            ?>

          </select>
        </div>
        <div class="ajuste">
          <label class="tipos1">Modelo</label><br>
          <input class="pequeno1" required="required" name="modelo_veiculo" id = "modelo_veiculo"></input>
        </div>

        <div class="espaaco">
          <div class="outroLado">
            <div class="espacinho">
              <label class="tipos2">Sexo</label><br>
              <select name="sexo" id="sexo" class="pequeno2">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
              </select>
            </div>
            <div class="miniespaco">
              <label class="tipos3">CPF</label><br>
              <input class="pequeno2" id="cpf" required="required" name="cpf"></input>
            </div>
            <div class="espaco5">
              <input type="button" class="cadastrar" value="Cadastrar" onclick="validarSenhas();">
              <a href="telaLogin.php"><input type="button" class="limapar" value="Voltar"></a>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <!-- SCRIPT MASK DO JQUERY -->
  <script type="text/javascript" src="jquery.mask.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#data_nasc').mask('00/00/0000');
      $('#cpf').mask('000.000.000-00');
      $('#telefone').mask('(00) 0 0000-0000');
    })
  </script>

  <!-- SCRIPT DO OLHO SENHA -->
  <script>
    function mostrarSenha() {
      var inputPass = document.getElementById('senha')
      var btnShowPass = document.getElementById('btn-senha')

      if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
      } else {
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
      }
    }

    function mostrarSenha1() {
      var inputPass = document.getElementById('senha-repeti')
      var btnShowPass = document.getElementById('btn-senha1')

      if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
      } else {
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>


  <script>
    function validarSenhas() {
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const telefone = document.getElementById('telefone').value;
        const dataNasc = document.getElementById('data_nasc').value;
        const senha = document.getElementById('senha').value;
        const confirma = document.getElementById('senha-repeti').value;
        const placa_veiculo = document.getElementById('placa_veiculo').value;
        const marca_veiculo = document.getElementById('marca_veiculo').value;
        const cpf = document.getElementById('cpf').value;
        const modelo_veiculo = document.getElementById('modelo_veiculo').value;

        console.log("Valores obtidos:", nome, email, telefone, dataNasc, senha, confirma, placa_veiculo, marca_veiculo, cpf, modelo_veiculo);
        // Verifica se algum campo obrigatório está vazio 
        if (nome === '' || email === '' || telefone === '' || dataNasc === '' || senha === '' || modelo_veiculo === '' || cpf === '' || marca_veiculo === '' || placa_veiculo === '') {
            Swal.fire({
                title: "Por favor, preencha todos os campos obrigatórios",
                icon: "warning"
            });
            return;
        }

        // Validação da data de nascimento
        const regexDataNasc = /^\d{2}\/\d{2}\/\d{4}$/;
        if (!regexDataNasc.test(dataNasc)) {
            Swal.fire({
                title: "Por favor, coloque uma data de nascimento válida ",
                icon: "warning"
            });
            return;
        }

        const dataNascArray = dataNasc.split('/');
        const dia = parseInt(dataNascArray[0]);
        const mes = parseInt(dataNascArray[1]);
        const ano = parseInt(dataNascArray[2]);

        // Verificação se o usuário tem pelo menos 18 anos
        const idadeMinima = 18;
        const dataAtual = new Date();
        const anoAtual = dataAtual.getFullYear();
        const idadeUsuario = anoAtual - ano;

        if (idadeUsuario < idadeMinima) {
            Swal.fire({
                title: "Você deve ter pelo menos 18 anos para se cadastrar",
                icon: "warning"
            });
            return;
        }

        if (dia < 1 || dia > 31 || mes < 1 || mes > 12) {
            Swal.fire({
                title: "Por favor, coloque uma data de nascimento válida",
                icon: "warning"
            });
            return;
        }

        // Verificação de senhas
        if (confirma !== senha) {
            Swal.fire({
                title: "As senhas não conferem",
                icon: "error"
            });
            return;
        }

        Swal.fire({
            icon: 'success',
            title: 'Usuário Cadastrado com Sucesso',
            preConfirm: () => {
                document.getElementById('formCadastro').submit();
            }
        });
    }
</script>


</body>

</html>