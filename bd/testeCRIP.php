<?php
    include("conexao.php");

    // Certifique-se de iniciar a sessão antes de acessar $_SESSION
    if (!isset($_SESSION)) {
        session_start();
    }

    // Verifica se o ID do usuário está definido na sessão
    if (isset($_SESSION['id_usuario'])) {
        $user_id = $_SESSION['id_usuario'];

        try {
            // Consulta a senha do usuário com base no ID da sessão
            $query = $dbh->prepare('SELECT senha FROM usuario WHERE id_usuario = :user_id');
            $query->bindParam(':user_id', $user_id);
            $query->execute();

            // Recupera a senha do usuário
            $senhaDoUsuario = $query->fetchColumn();

            // Verifica se a senha está definida antes de criar o hash
            if ($senhaDoUsuario !== false) {
                // Agora você pode usar password_hash para criar um novo hash
                $senhaCriptografada = password_hash($senhaDoUsuario, PASSWORD_DEFAULT);

                print_r($senhaCriptografada);
            } else {
                echo 'Senha não encontrada para o usuário atual.';
            }
        } catch (Exception $e) {
            echo $e;
        }
    } else {
        echo 'ID do usuário não encontrado na sessão.';
    }
?>
