<?php

    include('conexao.php');

    if (isset($_POST['email'], $_POST['senha']) && $_POST['email'] != '' & $_POST['senha'] != '') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }else{
        echo 'variavies não definidas';
        die();
    }

    try{

        $query = $dbh->prepare('SELECT email, senha FROM usuario WHERE email = :email AND senha = :senha');

        $query->execute(array(
            ':email' => $email,
            ':senha' => $senha
        ));

        $usuario = $query->fetch();
        print_r($usuario);

        if(isset($usuario['email'])){
            header('Location:telaPrincipal.php');
        }else{
            echo 'Falha login!';
            die();
        }
       
    }catch(PDOException $e){
        echo 'erro';
    }
?>