<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php require "html/head.php" ?>
</head>
	<!--  -->
	<body>
		<?php 
        include "html/header.php";
        require_once "src/conexao.php";
        include_once "src/model/Produto.php";
        include_once "src/model/Estoque.php";
        
        $id = isset($_GET['id']) ? $_GET['id'] : 0;

        $sql_code = "SELECT * FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto = '$id'";
        // $sql_code = "SELECT * FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto = '$id' ORDER BY idestoque DESC LIMIT 1";
        $sql_query = $conexao->query($sql_code);
        
        if($sql_query->num_rows > 0){
            $estoque = $sql_query->fetch_assoc();
            $objProduto = new Produto(
                $estoque['idproduto'],
                $estoque['nome'],
                $estoque['tipo'],
                $estoque['categoria'],
                $estoque['fabricante'],
                $estoque['descricao'],
                $estoque['foto'],
                $estoque['ativo'],
            );
            if(isset($estoque['idestoque'])){
                $objEstoque = new Estoque(
                    $estoque['idestoque'],
                    $objProduto,
                    $estoque['qtd'],
                    $estoque['registro'],
                    $estoque['data_registro'],
                    $estoque['valor_compra'],
                    $estoque['valor_venda']
                );
            }else{
                $objEstoque = new Estoque(
                    0,
                    $objProduto,
                    0,
                    '---',
                    '---',
                    0.0,
                    0.0
                );
            }
        }

        ?>
		<main>
		<h1>Detalhes do Produto</h1>
		<div class="card">
            <?php 
				while($produto = $sql_query->fetch_assoc()){

			?>

            <img src="<?=$produto['foto']?>" style="width: 20rem; margin: auto" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">TIPO: <?=$produto['tipo']?> </li>
                <li class="list-group-item">CATEGORIA: <?=$produto['categoria']?> </li>
                <li class="list-group-item">EM ESTOQUE:
                <?php
                $sql_entrada = "SELECT SUM(qtd) as Total1 FROM estoque WHERE registro = 'ENTRADA' AND id_produto = $id";
                $sql_saida = "SELECT SUM(qtd) as Total2 FROM estoque WHERE registro = 'SAÍDA' AND id_produto = $id";
                $totalEntrada = $conexao->query($sql_entrada);
                $totalSaida = $conexao->query($sql_saida);
                
                $temp = $totalEntrada->fetch_assoc();
                $temp2 = $totalSaida->fetch_assoc();
                
                $total = $temp['Total1'] - $temp2['Total2']; 
                
                if($total>0){echo ' SIM';}else{echo ' NÃO';};
                ?></li>
                <li class="list-group-item">Valor: R$ <?= $produto['valor_venda'] ?></li>
            </ul>
            <?php }?>
            <div class="card-body">
                <a href="index.php" class="card-link">Voltar</a>
                <a href="produtos.php" class="card-link">Lista de Produtos</a>
                <a href="?<?='id='.$id.'&adicionar='.$objEstoque->getIdEstoque() ?>" class="card-link" <?=(!isset($estoque['qtd']) || $estoque['qtd'] < 1) ? 'hidden' : ''?>>Adicionar ao Carrinho</a>
            </div>
        </div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

<!-- use projeto;

RENAME TABLE produto TO produtos;
ALTER TABLE produtos ADD categoria varchar(30) AFTER tipo;
ALTER TABLE produtos ADD fabricante varchar(30) AFTER categoria;
ALTER TABLE estoque CHANGE valor valor_compra double;
ALTER TABLE estoque ADD valor_venda double AFTER valor_compra; -->



</html>