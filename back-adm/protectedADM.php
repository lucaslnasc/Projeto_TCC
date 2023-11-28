<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {
        echo '<style>
                body {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                    margin: 0;
                    background-color: #0d2a4a;
                    color: white;
                    font-family: Arial, sans-serif;
                }

                .fundo {
                    background-color: #fff;
                    border-radius: 20px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    box-sizing: border-box;
                    text-align: center;
                    width: 400px;
                    height: 170px;
                }

                .letra-fundinho1 {
                    margin-top: 20px;
                    color: #1a1a1a;
                    font-size: 20px;
                    font-weight: bold;
                }

                .letra-fundinho2 {
                    margin-top: 10px;
                    color: #555;
                    font-size: 14px;
                }

                .botao {
                    background-color: #007bff;
                    color: #fff;
                    font-size: 18px;
                    width: 100%;
                    max-width: 340px;
                    height: 45px;
                    margin-top: 20px;
                    border: none;
                    border-radius: 5px;
                    transition: background-color 0.3s;
                    cursor: pointer;
                }

                .botao:hover {
                    background-color: #0056b3;
                }
              </style>';
              

        echo '<div class="fundo">
                <div>
                    <label class="letra-fundinho1">VOCÊ DEVE ESTAR LOGADO PARA ACESSAR ESTA PÁGINA!</label>
                </div>

                <div>
                    <a href="../telas/telaLoginAdm.php"><input type="submit" class="botao" value="Entrar"></a>
                </div>
              </div>';

        die();
    }
?>
