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
    $nome = trim($_POST['txtNome']);
    $tel = trim($_POST['txtTel']);
    $ende = trim($_POST['txtEnde']); 
    $cid = trim($_POST['txtCid']); 
 
    if (!empty($nome)){
       $sql = "UPDATE cliente SET nome='$nome', telefone='$tel', endereco='$ende', cidade='$cid' WHERE id='$id';";
       $ins = mysql_query($sql); 
       if(!$ins)
            echo ("Deu erro na atualização de Cliente"); 
    }
    else echo "Campos em branco"; 
    
    header("location: lstClien.php"); 
?>