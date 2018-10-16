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

    function retorna($txtProd){
        $result_prod = "SELECT * FROM produto where produto = '$txtProd' LIMIT 1";
        $resutado_prod = mysql_query($result_prod);
        if ($resultado_prod->num_rows){
            $row_prod = mysql_fetch_assoc($resultado_prod);
            $campo ['descricao'] = $row_aluno['descricao'];
            $campo['valor']= $row_prod['valor']
        } else {
            $campo['descricao'] = "Descricao nao encontrada";
        }
        return json_encode($campo);
    }

    if(isset($_GET['txtProd'])){
        echo retorna($_GET['txtProd']);
    }
?>