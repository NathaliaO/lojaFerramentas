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

   $id = trim($_REQUEST['txtId']);

   if(!empty($id)){
      $sql ="DELETE FROM item_pedido WHERE id='$id';";
      $rem = mysql_query($sql);
      if(!$rem)
        echo ("Erro para deletar o item_pedido!!");
    
   }
   else echo "Campo do id igual a 0";

  header("location: lstComp.php");
?>