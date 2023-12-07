<?php
    include('../bd/conexao.php');
    print_r($_GET);
    $id_vaga = $_GET['vaga'];
    $ocupado = $_GET['ocupado'];
    //$ocupado =1;
    $query = $dbh->prepare('UPDATE vaga SET ocupado = :ocupado WHERE id_vaga = :vaga');
    $query->execute(
        array(
            ':ocupado' => $ocupado,
            ':vaga' => $id_vaga
        )
    );
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Vaga Certa</title>

</head>
<body>
</body>
</html>