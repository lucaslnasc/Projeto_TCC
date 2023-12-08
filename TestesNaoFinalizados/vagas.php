<?php
include('../bd/conexao.php');

try {
    // Verificar a existência dos parâmetros GET
    if (!isset($_GET['vaga']) || !isset($_GET['ocupado'])) {
        throw new Exception('Parâmetros ausentes.');
    }



    // Validar e escapar os dados do usuário
    $id_vaga = filter_input(INPUT_GET, 'vaga', FILTER_SANITIZE_NUMBER_INT);
    $ocupado = filter_input(INPUT_GET, 'ocupado', FILTER_SANITIZE_NUMBER_INT);

    // Preparação e execução da consulta SQL
    $query = $dbh->prepare('UPDATE vaga SET ocupado = :ocupado WHERE id_vaga = :vaga');
    $query->execute(
        array(
            ':ocupado' => $ocupado,
            ':vaga' => $id_vaga
        )
    );

    echo 'Atualização bem-sucedida.';
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>
