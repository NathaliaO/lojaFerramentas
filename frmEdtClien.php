<?php
    $conexao =  mysql_connect("localhost","root",""); 
	if (!$conexao){
		echo "Erro ao se conectar MySql <br/>" ; 
		exit;
    }
    
    $banco  = mysql_select_db("loja_ferramenta");
	if (!$banco){
		echo "Erro ao se conectar ao banco loja-ferramenta...";
		exit;
    }

    $id = $_REQUEST['id'];
    $rs = mysql_query("SELECT * FROM  cliente where id=".$id);
    $linha = mysql_fetch_array($rs); 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Editar Cliente </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="borda.css">
    </head>
    <body>
    <div id="fullscreen_bg" class="fullscreen_bg">
      <div class="container col-md-8">
        <h1 class="text-white col-md-8">Editar Ciente</h1>
           <form id="frmEdtPro" name="frmEdtPro" method="POST" action="edtClien.php">
           <div id="borda" class="col-md-8">
             <div class="form-group">
                 <label for="lblId">ID: <?php echo $linha['id']?></label>
                 <input type="hidden" id="id" name="id" value="<?php echo $linha['id']?>">
             </div>
             <div class="form-group">
                 <label for="lblNome">Nome: </label>
                 <input type="text" id="txtNome" name="txtNome" class="form-control col-md-6 border border-dark" value="<?php echo $linha['nome']?>">
             </div>
             <div class="form-group">
                 <label for="lblTelefone">Telefone: </label>
                 <input type="text" id="txtTel" name="txtTel" class="form-control col-md-3 border border-dark" value="<?php echo $linha['telefone']?>">
             </div>
             <div class="form-group">
                 <label for="lblEndereco">Endereço: </label>
                 <input type="text" id="txtEnde" name="txtEnde" class="form-control col-md-3 border border-dark" value="<?php echo $linha['endereco']?>">
             </div>
             <div class="form-group">
                 <label for="lblCidade">Cidade: </label>
                 <input type="text" id="txtCid" name="txtCid" class="form-control col-md-3 border border-dark" value="<?php echo $linha['cidade']?>">
             </div>
             <input type="submit" id="btEnviar" name="btEnviar" 
                                        class="btn btn-success border border-dark" value="Atualizar">         
            <input type="reset" id="btLimpar" name="btLimpar"
                                        class="btn btn-warning border border-dark" value="Limpar">
            <input type="button" id="bt_Cancel" name="bt_Cancel"
                                        class="btn btn-danger border border-dark" value="Cancelar"
                                        onclick="javascript:location.href='lstProd.php'">
            </div>
           </form>
      </div>
</div>
    </body>
</html>