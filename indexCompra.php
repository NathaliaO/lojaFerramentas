<?php
    session_start();
    if (!isset($_SESSION['user']))
    header("location: ./login.html");

    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao){
        echo "Erro ao se conectar MySql <br/>";
        exit;
    }

    $banco = mysql_select_db ("loja_ferramenta");
    if (!$banco){
        echo "Erro ao se conectar ao banco loja_ferramenta";
        exit;
    }
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Menu Item/Pedido</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="indexCompra.css">
        <link rel="stylesheet" href="index.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
            <div id="fullscreen_bg" class="fullscreen_bg">
                <br><br><br><br>
                    <div id="home_quicklinks">
                            <a class="quicklink link1" href="frmInsPed.php">
                                
                                <span class="ql_caption">
                                    <span class="outer">
                                        <span class="inner">
                                            <h2>Cadastrar Pedido</h2>
                                        </span>
                                    </span>
                                </span>
                                <span class="ql_top"></span>
                                <span class="ql_bottom"></span>
                            </a>

                            <a class="quicklink link2" href="lstPed.php">
                                <span class="ql_caption">
                                    <span class="outer">
                                        <span class="inner">
                                            <h2>Listar Pedido</h2>
                                        </span>
                                    </span>
                                </span>
                                <span class="ql_top"></span>
                                <span class="ql_bottom"></span>
                            </a>

                            <a class="quicklink link3" href="lstComp.php">
                                <span class="ql_caption">
                                    <span class="outer">
                                        <span class="inner">
                                            <h2>Listar Compra </h2>
                                        </span>
                                    </span>
                                </span>
                                <span class="ql_top"></span>
                                <span class="ql_bottom"></span>
                            </a>

                            <div class="clear"></div>
                        </div>
                    
                    
                      
                  </div>
        </div>  
    </body>
</html>