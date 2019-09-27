<?php
session_start();
include_once ("class/conexao.php");
?>

<!DOCTYPE html>
<html>
    <head>	
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Matheus Cunha de Souza">
        <link rel="icon" href="img/logo-vilanina.png">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <title>Vila Nina - Flora e Paisagismo</title>

      
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <?php
        @$link = $_GET["link"];
        if ($link == 1) {
            echo '<link href="css/home.css" rel="stylesheet" type="text/css"/>';
        }
        ?>
    </head>

    <body class="corpo">
        <?php
        include_once 'class/nav.php';
        ?>

        <div id="conteudo">
            <img id="logo" src="img/logo-trabalhado.png">
        </div>
        <div class="conteudo">
            <?php
            @$link = $_GET["link"];

            $pag[1] = "homepage.php";
            $pag[2] = "sobre.php";
            $pag[3] = "servicos.php";
            $pag[4] = "produtos.php";
            $pag[5] = "pesquisa.php";
            $pag[6] = "contato.php";

            if (!empty($link)) {
                if (file_exists($pag[$link])) {
                    include $pag[$link];
                } else {
                    ?>
                    <style>
                        .corpo{
                            background-color: #FFFFFF;
                            margin: 0;
                            background-image: url('../img/fundo2.png');
                        }
                        #conteudo {
                            background: rgba(255,255,255,0.1);
                            background-size: 100%;
                            display:block;
                            padding:0 !important;
                            margin:0;
                        }
                        .conteudo{
                            background: rgba(255,255,255,0.1);
                            height:400px;
                        }
                    </style><?php
                }
            } else {
                ?>
                <style>
                    .corpo{
                        background-color: #FFFFFF;
                        margin: 0;
                        background-image: url('../img/fundo2.png');
                    }
                    #conteudo {
                        background: rgba(255,255,255,0.1);
                        background-size: 100%;
                        display:block;
                        padding:0 !important;
                        margin:0;
                    }
                    .conteudo{
                        background: rgba(255,255,255,0.1);
                        height:400px;
                    }
                </style><?php
            }
            ?>
        </div>
        <?php include_once 'class/footer.php'; ?>
        
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
