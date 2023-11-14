<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="logologominimini-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="cssCadastrar.css">
    <title>TELA CADASTRO</title>
</head>
<body>
<header>

      <div id="headerCima">
      <div class="logozada">
            <a href="http://"><img src="LOGOFIMSEM-removebg-preview (1).png" alt=""></a>
        </div>
      </div>

      <div id="headerBaixo">
        <div id="rodape"></div>
      </div>

      <label for="">

      </label>
    </header>
     
<form action="" method="post">

<div class="container text-center">
  <div class="row g-2">
    <div class="col-6">
    <div class="letrasInputs nomecompleto">Nome Completo:</div>
        <input type="text" class="inputs" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="letrasInputs cpf">CPF:</div>
        <input type="text" class="inputs" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="letrasInputs email">Endereço de E-mail:</div>
        <input type="email" class="inputs" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="letrasInputs tpvc">Tipo de Veículo:</div>
    <select class="mnselect">
        <option value="carro">Carro</option>
        <option value="moto">Moto</option>
    </select>
    </div>

    <div class="col-6">
    <div class="letrasInputs modelvc">Modelo do Veículo:</div>
        <input type="text" class="inputs" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="letrasInputs dtnsc">Data de Nascimento:</div>
        <input type="date" class="inputs" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="letrasInputs senha">Senha:</div>
        <input type="password" class="inputs" aria-describedby="addon-wrapping" required>
    </div>


  <div class="col-6">
    <br><label for="" class="primeiraFrase">Sua senha deve conter:</label><br>
    <label for="" class="restoFrase prmR">*Minímo um número</label><br>
    <label for="" class="restoFrase segundR">*Minímo de um caractere especial</label><br>
    <label for="" class="restoFrase tercR">*Minímo de 8 caracteres</label> 
    </div>


  <div class="col-6">
    <div class="letrasInputs plcvc">Placa do Veículo:</div>
        <input type="text" class="inputs" aria-describedby="addon-wrapping" required>
    </div>

    <div class="col-6">
    <div class="letrasInputs tel">Telefone:</div>
        <input type="text" class="inputs" aria-describedby="addon-wrapping" required>
    </div>
    
    <div class="col-6">
    <input type="reset" value="Limpar" class="btn btn-warning inputizinhos">
    </div>

    <div class="col-6">
    <input type="submit" value="Cadastrar" class="btn btn-success inputizinhos">
    </div>
    </form>
  </div>
  </div>
</div>
</body>
</html>