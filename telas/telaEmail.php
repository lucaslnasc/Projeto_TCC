<?php
/*$dsn = 'mysql:dbname=vaga_certa;host=127.0.0.1;port=3307';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'erro de conexão';
}
*/?>
<?php
 /* function verifica_dados($dbh) {
    if (isset($_POST['env']) && $_POST['env'] == "form") {
        $email = $_POST['email'];
        $sql = $dbh->prepare("SELECT * FROM teste_senha WHERE email = ?");
        $sql->bindValue(1, $email, PDO::PARAM_STR);
        $sql->execute();
        $total = $sql->rowCount(); 

        if ($total > 0) {
          if ($sql->execute()) {
              $dados = $sql->fetch(PDO::FETCH_ASSOC);
              
              if ($dados) {
                  enviar_email($dbh, $dados['email']);
              } else {
                  echo "Erro ao obter dados do usuário.";
              }
          } else {
              echo "Erro ao executar a consulta SQL.";
          }
      } else {
          
      }
    }
}
    function enviar_email($dbh, $email){
      echo $email;
    }
*/?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssEmail.css">
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
    </header>
    <div class = "fundo">
      <div>
        <label class="letra-fundinho1">Esqueci minha senha</label>
      </div>
      <div>
        <label class="letra-fundinho2"> Para redefinir sua senha, informe o e-mail <br> cadastrado
            na sua conta e lhe enviaremos uma <br> autorização para a troca de senha.  </label>
      </div>
      <form method = "post" action="">
      <div>
        <input type="" class = "email" name ="email" placeholder = "Email" required>
      </div>
      <div>
        <input type="submit" class = "botao" value="ENVIAR"></input>
        <input type="hidden" name="env" value="form">
        <?php //echo verifica_dados($dbh);?>
      </div>
      <div class = "divCancelar">
        <label for=""><a href="telaLogin.php">Cancelar</a></label>
      </div>
    </form>
    </div>
</body>
</html>