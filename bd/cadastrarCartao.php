    <?php
    include('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nmr_cartao = $_POST['nmr_cartao'];
        $nome_titular = $_POST['nome_titular'];
        $validade_mes = $_POST['validade_mes'];
        $validade_ano = $_POST['validade_ano'];
        $cvv = $_POST['cvv'];

    
        $verificar_cartao = $dbh->prepare('SELECT nmr_cartao FROM cartao WHERE nmr_cartao = :nmr_cartao');
        $verificar_cartao->execute(array(':nmr_cartao' => $nmr_cartao));

        if ($verificar_cartao->rowCount() > 0) {
        
            echo "Número do cartão já existe. Por favor, insira um número de cartão único.";
        } else {
        
            try {
                $query = $dbh->prepare('INSERT INTO cartao (nmr_cartao, nome_titular, validade_mes, validade_ano, cvv)
                VALUES (:nmr_cartao, :nome_titular, :validade_mes, :validade_ano, :cvv);');

                $query->execute(array(
                    ':nmr_cartao' => $nmr_cartao,
                    ':nome_titular' => $nome_titular,
                    ':validade_mes' => $validade_mes,
                    ':validade_ano' => $validade_ano,
                    ':cvv' => $cvv
                ));

                echo "Cartão cadastrado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
    }
    ?>
