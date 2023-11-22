<?php
    header('Content-Type: application/json; charset=utf-8');
    include("conexao.php");
    
    $livros[""] = "";
    try {
        if(isset($_POST['nome_livro'])){
            $livro = $_POST['nome_livro'];
            $categoria = $_POST['nome_categoria'];
            $query = $dbh->prepare("SELECT * FROM livros where nome like :livro AND categoria like :categoria");
            $query->execute(array(
                ':livro'=> "%$livro%",
                ':categoria'=> "%$categoria%",
            ));
            $livros = $query->fetchAll();
        }
    }catch(Exception $e){
        echo "Erro". $e->getMessage();
    }
    echo json_encode($livros);
?>