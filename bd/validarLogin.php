<?php
session_start(); // Inicia a sessão

include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($email) || empty($senha)) {
    echo "<script>alert('Campos obrigatórios vazios')</script>";
} else {
    try {
        $query = $dbh->prepare("SELECT id_usuario, email, senha FROM usuario WHERE email = :email");
        $query->execute(array(':email' => $email));
        $resultado = $query->fetch();

        if (empty($resultado) || !password_verify($senha, $resultado['senha'])) {
            echo "<script>
            alert('Usuário e/ou senha inválidos');
            window.location.href='../telas/telaLogin.php';
            </script>";
        } else {
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['email'] = $resultado['email'];
            header('Location: ../telas/telaPrincipal.php');
        }
    } catch (Exception $e) {
        echo $e;
    }
}
?>
