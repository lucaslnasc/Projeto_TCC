    <?php

    session_start();

    include('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $vaga = $_POST['vaga'];
        $data_agend = $_POST['data_agend'];
        $horario = $_POST['horario_inicio'];
        $horario_final = $_POST['horario_final'];
        $idUser = $_SESSION['id_usuario'];

        try {
            $query = $dbh->prepare('INSERT INTO agendamento (vaga, data_agend, horario_inicio, horario_final ,id_usuario) 
            VALUES (:vaga, :data_agend, :horario_inicio, :horario_final ,:id_usuario);');

            $query->bindParam(':vaga', $vaga);
            $query->bindParam(':data_agend', $data_agend);
            $query->bindParam(':horario_inicio', $horario);
            $query->bindParam(':horario_final', $horario_final);
            $query->bindParam(':id_usuario', $idUser);
            $query->execute();

            header('Location: ../telas/telaConfirmaAgend.php?pagamento_sucesso=true');

            exit;
        } catch (PDOException $e) {
            die("Erro ao realizar pagamento: " . $e->getMessage());
        }
    }
    ?>