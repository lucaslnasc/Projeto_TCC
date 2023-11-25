<?php

$dsn = 'mysql:dbname=vaga_certa;host=127.0.0.1;port=3307';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'erro de conexão';
}
?>