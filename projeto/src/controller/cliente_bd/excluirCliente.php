<?php

require_once "../../protect.php";
require_once "../../conexao.php";

$idCliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;

if($idCliente > 0){ 
    $sql_code = "DELETE FROM cliente WHERE idcliente = '$idCliente' ";
    $sql_query = $conexao->query($sql_code);

    header("Location: ../../../clientes.php");


} else {
    header("location: ../../../index.php");
}