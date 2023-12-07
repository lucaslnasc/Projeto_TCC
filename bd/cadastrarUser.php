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
    $tipo_veiculo = $_POST['tipo_veiculo'];
    $marca_veiculo = $_POST['marca_veiculo'];
    $modelo_veiculo = $_POST['modelo_veiculo'];
    $sexo = $_POST['sexo'];

    $emailExists = checkIfExists('email', $email);

    if ($emailExists) {
        echo json_encode(array('status' => 'error', 'message' => 'O e-mail já está cadastrado no sistema.'));
        exit;
    }

    $senhaCrip = password_hash($senha, PASSWORD_BCRYPT);

    try {
        $query = $dbh->prepare('INSERT INTO usuario (nome, email, cpf, senha, data_nasc, telefone, placa_veiculo, tipo_veiculo, marca_veiculo, modelo_veiculo, sexo)
            VALUES (:nome, :email, :cpf, :senha, :data_nasc, :telefone, :placa_veiculo, :tipo_veiculo, :marca_veiculo, :modelo_veiculo, :sexo);');

        $query->bindParam(':nome', $nome);
        $query->bindParam(':email', $email);
        $query->bindParam(':cpf', $cpf);
        $query->bindParam(':senha', $senhaCrip);
        $query->bindParam(':data_nasc', $data_nasc);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':placa_veiculo', $placa_veiculo);
        $query->bindParam(':tipo_veiculo', $tipo_veiculo);
        $query->bindParam(':marca_veiculo', $marca_veiculo);
        $query->bindParam(':modelo_veiculo', $modelo_veiculo);
        $query->bindParam(':sexo', $sexo);

        $query->execute();
        
        
        
        header('Location: ../telas/telaLogin.php?cadastro_sucesso=true');
        exit;
        
    } catch (PDOException $e) {
        die("Erro ao inserir usuário: " . $e->getMessage());
    }
}

function checkIfExists($column, $value)
{
    global $dbh;

    $query = $dbh->prepare("SELECT COUNT(*) as count FROM usuario WHERE $column = :value");
    $query->bindParam(':value', $value);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    return $result['count'] > 0;
}
?>
?>
