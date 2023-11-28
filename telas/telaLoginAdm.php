<?php
    include('../bd/conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/cssLoginAdm.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <title>Vaga Certa</title>
</head>

<body class="padrao0">
    <form action="../back-adm/validarLoginADM.php" method="post">
        <div class="container">
            <div class="imagem">
                <img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt="">
            </div>
            <div class="layout">
                <h3>Login Administrador</h3>
                <hr class="linha">
                <div class="inputs">
                    <input type="email" name="email" id="email" placeholder="Login" required="required">
                    <input type="password" name="senha" id="senha" placeholder="Senha" required="required">
                    <input type="submit" class="login" value="Entrar">
                </div>
            </div>
        </div>
    </form>
</body>

</html>