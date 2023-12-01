<?php

include('conexao.php');

if(isset($_GET['id_cartao']) && $_GET['id_cartao']!=''){
    $id_cartao = $_GET['id_cartao'];
}else{
    echo 'cartão não encontrado';
    die();
}

try{
    $query = $dbh->prepare('DELETE FROM cartao WHERE id_cartao=:id_cartao;');

    $query->execute(array(
        ':id_cartao' => $id_cartao
    ));
    header('Location: ../telas/telaCartoes.php');
    echo 'Cartão excluido com sucesso!';
}catch(PDOException $e){
    echo 'erro';
}

?>