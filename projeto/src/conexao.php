<?php
$hostname = "localhost";
$usuario = "root";
$senha = "";
$db = "projeto";

$conexao = new mysqli($hostname, $usuario, $senha, $db);
if($conexao->connect_errno){
    echo "Falha ao conectar: (".$conexao->connect_errno.")".$conexao->connection_error;
}else{
    echo "Conectado ao banco!<br>";
}