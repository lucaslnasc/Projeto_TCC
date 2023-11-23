<?php
include('conexao.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];
    $placa_veiculo = $_POST['placa_veiculo'];
    $categoria_veiculo = $_POST['categoria_veiculo'];
    $marca_veiculo = $_POST['marca_veiculo'];
    $modelo_veiculo = $_POST['modelo_veiculo'];

    $query = $dbh->prepare('INSERT INTO usuario (nome, email, cpf, senha, data_nasc, telefone, placa_veiculo, categoria_veiculo, marca_veiculo, modelo_veiculo)
    VALUES (:nome, :email, :cpf, :senha, :data_nasc, :telefone, :placa_veiculo, :categoria_veiculo, :marca_veiculo, :modelo_veiculo);');

    $query->execute(array(
        ':nome' => $nome,
        ':email' => $email,
        ':cpf' => $cpf,
        ':senha' => $senha,
        ':data_nasc' => $data_nasc,
        ':telefone' => $telefone,
        ':placa_veiculo' => $placa_veiculo,
        ':categoria_veiculo' => $categoria_veiculo,
        ':marca_veiculo' => $marca_veiculo,
        ':modelo_veiculo' => $modelo_veiculo
    ));
    
}
?>