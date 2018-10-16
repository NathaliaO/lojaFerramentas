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

    $rs = mysql_query("SELECT * FROM pedido;"); //rs = conjunto de registro
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Lista de Produtos </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="borda.css">
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg">
        <div class="container col-md-9">
        <h1 class="text-white col-md-8" id="inic">Lista de Produtos</h1>
        <button id="btVoltar" name="btVoltar" class="btn btn-danger btn-lg btn float-right" onclick="javascript:location.href='index.html'" value='Voltar'"><i class="fas fa-undo-alt"></i>Voltar</button>
        <button id="btAdc" name="btAdc" class="btn btn-secondary btn-lg btn float-right" onclick="javascript:location.href='frmInsPed.php'" value='Adicionar'"> <i class="far fa-plus-square"></i> Adicionar</button>
        <br>
        <br>
        <table class="table table table-hover table-dark col-md-8" id="tbBorda">
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Cliente</th>
                <th colspan="2" class="text-center">OPERAÇÕES</th>
            </tr>
            <?php while ($linha = mysql_fetch_array($rs)) {?>
                <tr>
                    <td><?php echo $linha ['id'] ?></td>
                    <td> <?php echo $linha['data'] ?></td>
                    <td><?php echo $linha ['cliente'] ?></td>
                    <td>
                        <button id="btEdit" class="btn btn-outline-warning" onclick="javascript:location.href='frmEdtPed.php?id=' + 
                        <?php echo $linha['id'] ?>" value='Editar'" > <i class="far fa-edit"></i></button>
                    </td>
                    <td>
                        <button id="btRem" class="btn btn-outline-danger" onclick="javascript:location.href='frmRemPed.php?id=' + 
                        <?php echo $linha['id'] ?>" value='Remover'" > <i class="fas fa-eraser"></i></button>
                    </td>
                </tr>
            <?php }?>
        </table>
        </div>
            </div>
    </body>
</html>