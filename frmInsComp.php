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
    
    $id = $_GET['id'];
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title> Inserir Compra </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="borda.css">
        <script src="jquery.min.js"></script>

     </head>
    <body>

    <div id="fullscreen_bg" class="fullscreen_bg">
        <div class="container col-md-8">
            <h1 class="text-white col-md-8">Cadastrar Compra</h1>
            <form id="frmNovoCom" name="frmNovoCom" method="POST" action="insComp.php">
                <div id="borda" class="col-md-8">

                    <div class="form-group">
                        <label for="lblIdPed"><b> ID Pedido: <?php echo $id ?></b> </label>
                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                    </div>
                       
                       <label for="lblProduto" ><b>Produto</b></label>
                    <select id="txtProd" name="txtProd" class="form-control form-control-lg" >
                        <option >Selecione o Produto</option> 
                        <?php 
                        $result = "SELECT * FROM produto";
                        $resultado = mysql_query( $result);
                        while ($linha = mysql_fetch_assoc($resultado)){?> 
                            <option value="<?php echo $linha ['id'];?>"  ><?php echo $linha['descricao'];?>
                            </option><?php
                            
                            }
                            
                        ?>
                        </select>
                        <br>
                        <div class="form-group">
                        <label for="lblQuantidade"><b>Quantidade: <b></label><BR>
                        <input type="text" id="txtQtd" name="txtQtd" class="form-control col-md-3 border border-dark" value="1">
                        </div>
                 <br>
                    <div class="form-group">
                    <label for="lblValor"><b>Valor: <b></label><BR>
                    <input type="text" id="txtVal" name="txtVal" class="form-control col-md-3 border border-dark" value=""><br>
                    </div>  

                    <input type="submit" id="btEnviar" name="btEnviar" class="btn btn-success border border-dark" value="Gravar">
                    <input type="reset" id="btLimpar" name="btLimpar" class="btn btn-warning border border-dark" value="Limpar">
                    <input type="button" id="btCancel" name="btCancel" class="btn btn-danger border border-dark" value="Cancelar" onclick="javascript:location.href='index.html'">
                </div>
            </form>
        </div>
    </div>
    </body>
</html>