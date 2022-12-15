<?php require_once "src/conexao.php";
if(!isset($_SESSION)){
    session_start();
} 
 ?>
<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <?php if(isset($_SESSION['tipo'])){ ?>
			    <li><a href='clientes.php'>Clientes</a></li>
			<?php }elseif(isset($_SESSION['id'])){
                 $id=$_SESSION['id'];?>
                <li><a href='edicaoCliente.php?id=<?=$id?>'>Configuração</a></li>
            <?php }?>    
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>
            <?php
                 if(isset($_SESSION['nome'])){
                   
            ?>
                    <li style = 'float: right;'><a href="clienteConfiguracao.php">Bem-vindo, <?php if(str_word_count($_SESSION['nome']) == 1){ echo $_SESSION['nome']; }else{ echo substr($_SESSION['nome'],0,strpos($_SESSION['nome']," ")); }?></a></li>            
                  
            <?php } ?> 
        </ul>
    </nav>