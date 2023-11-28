<?php

include("conexao.php");

$save = isset($_POST['heart']) ? 1 : 0;

try {

    $query = $dbh->prepare("INSERT INTO estacionamento_cliente (id_cliente, id_estacionamento, salvar) VALUES (?) 
    ON DUPLICATE KEY UPDATE auto_save = ?");

} catch (Exception $e) {
    echo ''. $e->getMessage() .'';
}

?>