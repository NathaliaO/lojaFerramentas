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
    $id = trim($_POST['id']);
   $prod = trim($_POST['txtProd']);
   $qtde = trim($_POST['txtQtd']);
   $val = trim($_POST['txtVal']);

   if(!empty($qtde)){
    $sql ="INSERT INTO item_pedido (pedido, produto, quantidade, valor) VALUES ('$id', '$prod', '$qtde', '$val');";
    $ins = mysql_query($sql);
    if(!$ins){
      echo ("Deu erro para inserir produto!!");
    }
 }
 else { echo "Campos em branco!!"; }

 header("location:lstComp.php");
?>