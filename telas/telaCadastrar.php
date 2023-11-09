<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="cssCadastrar.css">
    <title>cadastro</title>
</head>
<body>
<header>
      <div id="headerCima">
        <i id="burger" class="material-icons" onclick="clickMenu()">menu</i>
        <menu id="itens">
          <ul>
            <li><a href="#">Opção 1</a></li>
            <li><a href="#">Opção 2</a></li>
            <li><a href="#">Opção 3</a></li>
            <li><a href="#">Opção 4</a></li>
            <li><a href="#">Opção 5</a></li>
          </ul>
        </menu>
      </div>
      <div id="headerBaixo">
        <div id="rodape"></div>
      </div>
    </header>
     
<form action="" method="post">
<div class="container text-center">
  <div class="row g-2">
    <div class="col-6">
    <div class="p-3 letras">Nome Completo</div>
        <input type="text" class="form-control" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="p-3 letras">CPF</div>
        <input type="text" class="form-control" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="p-3 letras">Endereço de E-mail</div>
        <input type="email" class="form-control" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="p-3 letras">Tipo de Veículo</div>
    <select class="form-select">
        <option value="carro">Carro</option>
        <option value="moto">Moto</option>
    </select>
    </div>

    <div class="col-6">
    <div class="p-3 letras">Modelo do Veículo</div>
        <input type="text" class="form-control" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="p-3 letras">Data de Nascimento</div>
        <input type="date" class="form-control" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="p-3 letras">Senha</div>
        <input type="password" class="form-control" aria-describedby="addon-wrapping" required>
    </div>


  <div class="col-6">
    <br><label for="" class="primeiraFrase">Sua senha deve conter:</label><br>
    <label for="" class="restoFrase">*Minímo um número</label><br>
    <label for="" class="restoFrase">*Minímo de um caractere especial</label><br>
    <label for="" class="restoFrase">*Minímo de 8 caracteres</label> 
    </div>


  <div class="col-6">
    <div class="p-3 letras">Placa do Veículo</div>
        <input type="text" class="form-control" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="p-3 letras">Telefone</div>
        <input type="text" class="form-control" aria-describedby="addon-wrapping" required>
    </div>
    
    <div class="col-6">
    <input type="reset" value="Limpar" class="btn btn-warning">
    </div>

    <div class="col-6">
    <input type="submit" value="Cadastrar" class="btn btn-success">
    </div>






    </form>
  </div>
  </div>
</div>

<script>
      function clickMenu() {
        if (itens.style.display == "block") {
          itens.style.display = "none";
        } else {
          itens.style.display = "block";
        }
      }
    </script>
</body>
</html>

