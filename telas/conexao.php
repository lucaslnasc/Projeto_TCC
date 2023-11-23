<?php

$dsn = 'mysql:dbname=estacionamento;hosto=127.0.0.1;port=3306';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'erro de conexão';
}
?>