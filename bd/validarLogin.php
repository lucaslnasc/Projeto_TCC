<?php
    //Inclusão da conexão
    include("conexao.php");

    //Criando variaveis para realização da consulta ao banco de dados
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Verificando se o usuário digitou os campos obrigatórios
    if (empty($email) || empty($senha)){
        //Utilizano alerta em JavaScrip para exibição de mensagem
        echo "<script>alert('Campos obrigatórios vazios')</script>";
    }else{
        //Tentando realizar consulta, o try é importante pois o erro não é exibido por padrão ao usuário
        try{
            //Preparando instrução para a consulta do banco de dados
            
            $query = $dbh->prepare("SELECT email, senha FROM usuario WHERE email = :email AND senha = :senha");
            $query->execute(array(
                ':email' => $email,
                ':senha' => $senha
                )
            );
            
            //Obtendo através do fetch uma única linha de resultado do banco
            $resultado = $query->fetch();
            
            //Iniciando sessão
            if(empty($resultado)){
                echo "<script>alert('Usuário e/ou senha invalidos')</script>";
            }

            else{
                if(!isset($_SESSION)){
                    session_start();
                }
                //Estabelecendo variaveis da sessão
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['nome'] =$resultado['nome'];
                header('Location: C:\xampp\htdocs\VAGACERTATCC\telas\telaPrincipal.php');
            }

        }catch(Exception $e){
            echo $e;
        }
    }