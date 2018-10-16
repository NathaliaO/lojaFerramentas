<?php

    $user = trim($_POST['user']);
    $pwd = trim($_POST['pwd']);
    $md5 = md5($pwd);

    //echo "Usuario: ". $user . "<br/>";
    //echo "Senha: ". $pwd . "<br/>";

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

    $rs = mysql_query("SELECT * FROM usuario where user like '$user'");
    $linha = mysql_fetch_array($rs);

    $pwd = md5($pwd);
    if ($pwd==$linha['pwd']){
        //echo "Usuário e senha compativeis";
        session_start();
        $_SESSION['user'] = $user;
        header('location:index.html');

    }  
    else { //echo "Usuário e senha inválido"; 
                header('location: login.html');
        }
?>