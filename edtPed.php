<?php

    $conexao = mysql_connect("localhost","root",""); 
	if (!$conexao){
		echo "Erro ao se conectar MySql <br/>" ; 
		exit;
    }
    
    $banco = mysql_select_db("loja_ferramenta");
	if (!$banco){
		echo "Erro ao se conectar ao banco loja_ferramenta...";
		exit;
    }

    $id = trim($_POST['id']);
    $cliente = trim($_POST['txtCli']);
    $data = trim($_POST['txtData']);
    $nova_data = implode("-", array_reverse(explode("/", $data))); // mudando a data de DD-MM-AAAA, para AAAA-MM-DD
 
    if (!empty($cliente)){
       $sql = "UPDATE pedido SET data='$nova_data', cliente='$cliente' WHERE id='$id';";
       $ins = mysql_query($sql); 
       if(!$ins)
            echo ("Deu erro na atualização de produto"); 
    }
    else echo "Descrição em branco ou  campo valor igual a zero"; 
    
    header("location: frmInsComp.php"); 
?>