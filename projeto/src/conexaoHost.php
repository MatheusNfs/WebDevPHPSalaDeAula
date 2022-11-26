<?php
$hostname = "localhost";
$usuario = "id19914345_dev";
$senha = "Up4$KN@PLH!Zb&G6";
$db = "id19914345_projetobd	";

$conexao = new mysqli($hostname, $usuario, $senha, $db);
if($conexao->connect_errno){
    echo "Falha ao conectar: (".$conexao->connect_errno.")".$conexao->connection_error;
}else{
    // echo "Conectado ao banco!<br>";
}