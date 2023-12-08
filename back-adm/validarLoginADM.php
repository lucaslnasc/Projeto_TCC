<?php
session_start();
include("../bd/conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        echo "<script>alert('Campos obrigatórios vazios')</script>";
    } else {
        try {
            $query = $dbh->prepare("SELECT id_adm, email, senha FROM administrador WHERE email = :email");
            $query->execute(array(':email' => $email));
            $resultado = $query->fetch();

            if (empty($resultado) || $senha !== $resultado['senha']) {
                echo "<script>
                alert('Usuário e/ou senha inválidos');
                window.location.href='../telas/telaLogin.php';
                </script>";
            } else {
                $_SESSION['id_adm'] = $resultado['id_adm'];
                $_SESSION['email_adm'] = $resultado['email'];
                header('Location: ../telas/telaTabelaADM.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>
