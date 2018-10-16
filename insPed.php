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
   

   $cliente = trim($_POST['txtCliente']);
   $data = trim($_POST['txtData']);
   $nova_data = implode("-", array_reverse(explode("/", $data))); // mudando a data de DD-MM-AAAA, para AAAA-MM-DD

   if(!empty($cliente)){
    $sql ="INSERT INTO pedido (data, cliente) VALUES ('$nova_data', '$cliente');";
    $ins = mysql_query($sql);
    if(!$ins){
      echo ("Deu erro para inserir produto!!");
    }
    
 }
 else { echo "Campos em branco!!"; }
 $id = MySql_INSERT_ID();
 header("location:frmInsComp.php?id=".$id);

?>