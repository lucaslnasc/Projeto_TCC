<?php
 
    include("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    if (empty($email) || empty($senha)){

        echo "<script>alert('Campos obrigatórios vazios')</script>";
    }else{
  
        try{
      
            
            $query = $dbh->prepare("SELECT id_usuario, email, senha FROM usuario WHERE email = :email AND senha = :senha");
            $query->execute(array(
                ':email' => $email,
                ':senha' => $senha
                )
            );
        
            $resultado = $query->fetch();
            
        
            if(empty($resultado)){
                echo "<script>alert('Usuário e/ou senha invalidos')</script>";
            }
           
           
            else{
                if(!isset($_SESSION)){
                    session_start();
                } 
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['email'] =$resultado['email'];
                header('Location: ../telas/telaPrincipal.php');
            }

        }catch(Exception $e){
            echo $e;
        }
    }