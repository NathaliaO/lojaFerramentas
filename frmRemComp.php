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

    $id = $_REQUEST['id'];
    $rs = mysql_query("SELECT * FROM item_pedido where id='$id';");
    $linha = mysql_fetch_array($rs);
   //echo $linha['descricao'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Remover Item_pedido </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="borda.css">
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg">
        <div class="container col-md-8">
        <h1 class="text-white col-md-8">Remover Item_Pedido</h1>
        <form id="frmRemProd" name="frmRemProd" method="GET" action="remComp.php">
            <div id="borda">
                <div class="form-group">
                       <span class="text-xl font-weight-bold">ID:  </span>
                       <span class="text-xl font-weight-normal"><?php echo $linha['id'] ?></span>
                       <input type="hidden" id="txtId" name="txtId" value="<?php echo $linha['id']?>">
                </div>
                <div class="form-group">
                    <span class="text-xl font-weight-bold">Pedido:  </span>
                    <span class="text-xl font-weight-normal"><?php echo $linha['pedido'] ?></span>
                </div>
                <div class="form-group">
                    <span class="text-xl font-weight-bold">Quantidade:  </span>
                    <span class="text-xl font-weight-normal"><?php echo $linha['quantidade'] ?></span>
                </div>
                <div class="form-group">
                    <span class="text-xl font-weight-bold">Valor:  </span>
                    <span class="text-xl font-weight-normal"><?php echo $linha['valor'] ?></span>
                </div>
                <button name="btRem" id="btRem" class="btn btn-success border border-dark" type="submit">Remover</button>
                <button name="btVoltar" id="btVoltar" class="btn btn-danger border border-dark" type="button" onclick="javascript:location.href='lstPed.php'">Voltar</button>
            </div>
        </form>
        </div>
</div>
    </body>
</html>