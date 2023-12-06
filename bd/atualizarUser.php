<?php
include('conexao.php');

if (isset($_POST['nome'], $_POST['telefone'], $_POST['tipo_veiculo'], $_POST['marca_veiculo'], $_POST['placa_veiculo'], $_POST['modelo_veiculo'], $_POST['id_usuario'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $tipo_veiculo = $_POST['tipo_veiculo'];
    $marca_veiculo = $_POST['marca_veiculo'];
    $placa_veiculo = $_POST['placa_veiculo'];
    $modelo_veiculo = $_POST['modelo_veiculo'];
    $id_usuario = $_POST['id_usuario'];
} else {
    echo "<script>
            alert('Não foi possivel atualizar suas informações!');
            window.location.href='../telas/telaPerfil.php';
            </script>";
}

try {

    $query = $dbh->prepare('UPDATE usuario SET nome=:nome, telefone=:telefone, tipo_veiculo=:tipo_veiculo, marca_veiculo=:marca_veiculo, placa_veiculo=:placa_veiculo, modelo_veiculo=:modelo_veiculo
    WHERE id_usuario=:id_usuario;');

    $query->execute(array(
        ':nome' => $nome,
        ':telefone' => $telefone,
        ':tipo_veiculo' => $tipo_veiculo,
        ':marca_veiculo' => $marca_veiculo,
        ':placa_veiculo' => $placa_veiculo,
        ':modelo_veiculo' => $modelo_veiculo,
        ':id_usuario' => $id_usuario
    ));
    echo "<script>
    alert('Suas informações foram atualizadas!');
    window.location.href='../telas/telaPerfil.php';
    </script>";
} catch (PDOException $e) {
    echo 'erro';
}
