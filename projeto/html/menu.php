<?php require_once "src/conexao.php";
if(!isset($_SESSION)){
    session_start();
} 
 ?>
<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <?php if(isset($_SESSION['tipo'])){
				echo "<li><a href='clientes.php'>Clientes</a></li>";
			} ?>
            
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>
        </ul>
    </nav>