<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssTrocaSenha.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <title>Vaga Certa</title>
</head>
<body class="padrao0">
<header>
        <div id="headerCima">
            <div class="logozada">
                <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt=""></a>
            </div>
</div>
    </header>
    <div class = "fundo">
      <div>
        <label class="letra-fundinho1">Redefinir sua senha</label>
      </div>
      <div>
        <label class="letra-fundinho2"> Preencha os campos </label>
      </div>
      <div class ="divzada">
        <input type="password" class = "email" placeholder = "Nova senha" id="senha" >
        <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
      </div>

      <div class= "espacin"></div>

      <div class ="divzada">
        <input type="password" class = "email" placeholder = "Repetir senha" id="senha" >
        <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
      </div>
      <div>
        <input type="submit" class = "botao" value="REDEFINIR"></input>
      </div>
      <div class = "divCancelar">
        <label for=""><a href="">Cancelar</a></label>
      </div> 
    </div>
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
</body>
</html>