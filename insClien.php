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

   $nome = trim($_POST['txtNome']);
   $tel = trim($_POST['txtTel']);
   $ende = trim($_POST['txtEnde']);
   $cid = trim($_POST['cidade']);

   if(!empty($nome)){
      $sql ="INSERT INTO cliente (nome, telefone, endereco, cidade) VALUES ('$nome', '$tel', '$ende', '$cid');";
      $ins = mysql_query($sql);
      if(!$ins){
        echo ("Deu erro para inserir Cliente!!");
      }
   }
   else { echo "Nome em branco!!"; }

  header("location:lstClien.php");
?>