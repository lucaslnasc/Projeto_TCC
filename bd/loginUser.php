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

        $query = $dbh->prepare('SELECT email, senha FROM usuario WHERE email = :email');

        $query->execute(array(
            ':email' => $email
        ));

        $usuario = $query->fetch();
        print_r($usuario);

        if(isset($usuario['email'])){
            if(password_verify($senha, $usuario['senha'])){
                header('Location:telas\telaPrincipal.php');
            }else{
                echo 'Falha login!';
                die();
            }
        }else{
            echo 'Falha login!';
            die();
        }
       
    }catch(PDOException $e){
        echo 'erro';
    }
?>