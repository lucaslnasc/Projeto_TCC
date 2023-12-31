<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_cartao = $_POST['numero_cartao'];
    $nome_cartao = $_POST['nome_cartao'];
    $validade_mes = $_POST['validade_mes'];
    $validade_ano = $_POST['validade_ano'];
    $cvv = $_POST['cvv'];
    $id_usuario = $_POST['id_usuario'];

    $verificar_cartao = $dbh->prepare('SELECT numero_cartao FROM cartao WHERE numero_cartao = :numero_cartao');
    $verificar_cartao->execute(
        array(
            ':numero_cartao' => $numero_cartao
        )
    );

    if ($verificar_cartao->rowCount() > 0) {

        echo "Número do cartão já existe. Por favor, insira um número de cartão único.";
    } else {

        try {
            $query = $dbh->prepare('INSERT INTO cartao (numero_cartao, nome_cartao, validade_mes, validade_ano, cvv, id_usuario)
                VALUES (:numero_cartao, :nome_cartao, :validade_mes, :validade_ano, :cvv, :id_usuario);');

            $query->execute(
                array(
                    ':numero_cartao' => $numero_cartao,
                    ':nome_cartao' => $nome_cartao,
                    ':validade_mes' => $validade_mes,
                    ':validade_ano' => $validade_ano,
                    ':cvv' => $cvv,
                    ':id_usuario' => $id_usuario

                )
            );

            header('Location: ../telas/telaCartoes.php?cadastro_sucesso=true');
            exit;
        } catch (PDOException $e) {
            die("Erro ao inserir usuário: " . $e->getMessage());
        }
    }
}
