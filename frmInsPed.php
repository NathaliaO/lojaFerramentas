<?php
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
        <meta charset="UTF-8">
        <title> Inserir Pedido </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="borda.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    </head>
    <body>
    <div id="fullscreen_bg" class="fullscreen_bg">
        <div class="container">
            <h1 class="text-white col-md-8">Cadastrar Pedido</h1>
            <form id="frmNovoPed" name="frmNovoPed" method="POST" action="insPed.php">
                <div id="borda" class="col-md-8">

                    <label for="lblCliente" ><b>Cliente</b></label>
                    <select name="txtCliente" class="form-control form-control-lg">
                        <option >Selecione</option> 
                        <?php 
                        $result = "SELECT * FROM cliente";
                        $resultado = mysql_query( $result);
                        while ($linha = mysql_fetch_assoc($resultado)){?>
                            <option value="<?php echo $linha ['id']; ?> "><?php echo $linha['nome'];?>
                            </option><?php
                            }
                        ?>
                    </select> <br>

                    <label for="lblData"><b>Data</b></label>
                    <br>

                <div class="form-group">
                    <div class="col-xs-5 date">
                        <div class="input-group input-append date" id="datePicker">
                            <input type="text" class="form-control" id="txtData" name="txtData" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>         
                <br>
                <br>         
                <input type="submit" id="btEnviar" name="btEnviar" class="btn btn-success border border-dark" value="Gravar">
                <input type="reset" id="btLimpar" name="btLimpar" class="btn btn-warning border border-dark" value="Limpar">
                <input type="button" id="btCancel" name="btCancel" class="btn btn-danger border border-dark" value="Cancelar" onclick="javascript:location.href='lstProd.php'">
                </div>
            </form>
        </div>
                        </div>
    </body>
</html>