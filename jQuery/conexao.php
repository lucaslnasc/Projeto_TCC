<?php
    /* Connect to a MySQL database using driver invocation */
    try {
        $dsn = 'mysql:dbname=livraria;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $dbh = new PDO($dsn, $user, $password);
    }
    catch (PDOException $e) {
        echo ''. $e->getMessage();
    }

?>