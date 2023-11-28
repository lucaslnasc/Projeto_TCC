<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {
        echo '<style>
        .padrao0 {
            display: inline;
            font-family: Arial;
            background-color: #0d2a4a;
            color: white;
          }
          .logozada {
            position: fixed;
            margin-right: 100px;
            width: 10px;
            margin-top: -135px;
            left: 43%;
          }

          .logozada img{
            height:123px;
            position: fixed;
          
           
          }
          
          .fundo {
            position: fixed;
            color: white;
            width: 400px;
            height: 230px;
            background-color: white;
            left: 41%;
            top: 25%;
            border-radius: 20px;
          }
          
          .letra-fundinho1 {
            margin-top: 677px;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            margin-left: 135px;
            font-weight: bold;
         
          }
          
          .letra-fundinho2 {
            margin-top: 25px;
            color: grey;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15;
            margin-left: 10%;
            text-align: center;
          }
          .letra-fundinho3 {
            margin-top: 25px;
            color: grey;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15;
            margin-left: 30%;
            text-align: center;
          }
          
          
          .botao{
            background-color: #0d2a4a;
            color: #ffffff;
            font-size: 19px;
            width: 340px;
            height: 45px;
            margin-top: 25px;
            margin-left: 25px;
            border-width: 0px;
            border-radius: 5px;
            transition: 2s;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
            border: 2px solid white(41, 216, 41);
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
          }
          
          .divCancelar{
            margin-left: 40.5%;
            margin-top: 6%;
          }
          
          .divzada i{
            font-size: 20px;
            cursor: pointer;
            position: absolute;
            right: 12%;
            color: black;
            margin-top: -40px;
          }
          
           
              </style>';
              
             
        echo '<div class="fundo">
        </head>
        <body class="padrao0">
        <header>
                <div id="headerCima">
                    <div class="logozada">
                        <a href="http://"><img src="../img/LOGOFIMSEM-removebg-preview (1) (1).svg" alt=""></a>
                    </div>
        </div>
            </header>
            <div class = "fundo">
              <div>
              <br><br>
                <label class="letra-fundinho1">ATENÇÃO!</label>
              </div>
              <div>
              <br>
                <label class="letra-fundinho2"> Para acessar esta página é necessário estar<br> 
                <lavel class="letra-fundinho3">logado em uma conta</label></label>
              </div>
              <div>
                <a href="telaLogin.php"><input type="submit" class = "botao" value="ENTRAR"></input></a>
              </div>
             
            </div>
              </div>';

        die();
    }
?>
