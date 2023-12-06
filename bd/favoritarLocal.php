<?php

include("conexao.php");

session_start();
if(isset($_SESSION[$_POST['session_var']])){
    $sessaoteste = $_SESSION[$_POST['session_var']];
} else {
    echo "Error: Session not set";
    exit();
}

$save = isset($_POST['heart']) ? 1 : 0;

try {
    $query = $dbh->prepare("INSERT INTO estacionamento_cliente 
    (id_cliente, id_estacionamento, salvar) VALUES (:id_cliente, :id_estacionamento, :salvar) 
    ON DUPLICATE KEY UPDATE salvar = :salvar");
    $query->execute(array(
        ":id_cliente" => $sessaoteste,
        ":id_estacionamento" => $_POST['id_local'],
        ":salvar" => $save,
    ));

} catch (Exception $e) {
    echo ''. $e->getMessage() .'';
}
?>