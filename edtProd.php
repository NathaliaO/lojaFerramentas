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
    $desc = trim($_POST['txtDesc']);
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']); 
 
    if (!empty($desc) && $val>0){
       $sql = "UPDATE produto SET descricao='$desc', quantidade='$qtd', valor='$val' WHERE id='$id';";
       $ins = mysql_query($sql); 
       if(!$ins)
            echo ("Deu erro na atualização de produto"); 
    }
    else echo "Descrição em branco ou  campo valor igual a zero"; 
    
    header("location: lstProd.php"); 
?>