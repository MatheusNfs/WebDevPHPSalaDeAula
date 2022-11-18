<?php

require_once "../../protect.php";
require_once "../../conexao.php";

    $idProduto = isset($_POST['id_produto']) ? $_POST['id_produto'] : 0;
    
    if($idProduto > 0){
        $qtd = isset($_POST["qtd"]) ? $_POST["qtd"] : "";
        $registro = isset($_POST["registro"]) ? $_POST["registro"] : "";
        $data = isset($_POST["data_registro"]) ? $_POST["data_registro"] : "";
        $valorCompra = isset($_POST["valor_compra"]) ? $_POST["valor_compra"] : "";
        $valorVenda = isset($_POST["valor_venda"]) ? $_POST["valor_venda"] : "";
    

        $sql_code = "INSERT INTO estoque (idestoque, id_produto, qtd, registro, data_registro, valor_compra, valor_venda) VALUES (NULL, (SELECT idproduto FROM produtos WHERE idproduto = '$idProduto'), '$qtd', '$registro','$data','$valorCompra','$valorVenda')";
        $sql_query = $conexao->query($sql_code);

        header("Location: ../../../estoque.php?=$idProduto");
    }else{
        header("Location: ../../../index.php");
    }
