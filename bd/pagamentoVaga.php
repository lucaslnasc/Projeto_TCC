<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ... (código existente)

    // Processar os horários e carga horária selecionados
    $horarioSelecionado = isset($_POST['horario']) ? $_POST['horario'] : null;
    $cargaHorariaSelecionada = isset($_POST['carga_horaria']) ? $_POST['carga_horaria'] : null;

    if ($horarioSelecionado !== null && $cargaHorariaSelecionada !== null) {
        try {
            // Certifique-se de substituir $idUsuario pelo identificador do usuário correto
            $idUsuario = $_SESSION['id_usuario']; // Exemplo: você deve obter o id do usuário da sessão ou de onde quer que esteja armazenado.
            
            // Utilize declarações preparadas para evitar SQL injection
            $stmt = $dbh->prepare('INSERT INTO agendamento (vaga, data_agen, horario, carga_horaria, id_usuario_agend) VALUES (:vaga, :data_agen, :horario, :carga_horaria, :id_usuario)');
            $stmt->bindParam(':vaga', $nome_vaga, PDO::PARAM_STR);
            $stmt->bindParam(':data_agen', $data_atual, PDO::PARAM_STR);
            $stmt->bindParam(':horario', $horarioSelecionado, PDO::PARAM_STR);
            $stmt->bindParam(':carga_horaria', $cargaHorariaSelecionada, PDO::PARAM_STR);
            $stmt->bindParam(':id_usuario', $idUsuario, PDO::PARAM_INT);
            $stmt->execute();

            echo 'Agendamento realizado com sucesso!';
        } catch (PDOException $e) {
            echo 'Erro ao realizar o agendamento: ' . $e->getMessage();
        }
    } else {
        echo 'Por favor, selecione horário e carga horária antes de efetuar o pagamento.';
    }
}
?>
