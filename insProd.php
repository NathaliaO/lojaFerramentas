<?php
    //echo "Meu php está funcionando..."

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

   $desc = trim($_POST['txtDesc']);
   $qtde = trim($_POST['txtQtde']);
   $val = trim($_POST['txtVal']);

   if(!empty($desc) && $val>0){
      $sql ="INSERT INTO produto (descricao, quantidade, valor) VALUES ('$desc', '$qtde', '$val');";
      $ins = mysql_query($sql);
      if(!$ins){
        echo ("Deu erro para inserir produto!!");
      }
   }
   else { echo "Descrição em branco, ou valor vazio!!"; }

  header("location:lstProd.php");
?>