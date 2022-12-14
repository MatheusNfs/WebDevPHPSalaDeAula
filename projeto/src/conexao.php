<?php
$hostname = "localhost";
$usuario = "root";
$senha = "";
$db = "projeto";
// $hostname = "sql101.epizy.com";
// $usuario = "epiz_33158081";
// $senha = "XOJ2o2gqCC";
// $db = "epiz_33158081_projetobd";

$conexao = new mysqli($hostname, $usuario, $senha, $db);
if($conexao->connect_errno){
    echo "Falha ao conectar: (".$conexao->connect_errno.")".$conexao->connection_error;
}else{
    // echo "Conectado ao banco!<br>";
}