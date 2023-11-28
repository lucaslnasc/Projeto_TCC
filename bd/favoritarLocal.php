<?php

include("conexao.php");

$save = isset($_POST['heart']) ? 1 : 0;

try {

    

} catch (Exception $e) {
    echo ''. $e->getMessage() .'';
}

?>