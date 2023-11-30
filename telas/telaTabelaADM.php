<?php
include('../back-adm/protectedADM.php')
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Vagas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logologominimini-removebg-preview.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cssTabelaAdm.css">
</head>

<body class="padrao0">
    <header>
        <div id="headerCima">
            <div class="logozada">
                <img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt="Logo do sistema">
                <ul>
                    <button><a href="telaLoginAdm.php">Sair</a></button>
                </ul>
            </div>
        </div>
    </header>
    <div class="registro_vagas">
        <article>
            <div class="area_vagas">
                <table class="table_registro">
                    <thead>
                        <tr>
                            <th>Vaga</th>
                            <th>Placa</th>
                            <th>Modelo</th>
                            <th>Data</th>
                            <th>Horário</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </article>
    </div>
</body>

</html>