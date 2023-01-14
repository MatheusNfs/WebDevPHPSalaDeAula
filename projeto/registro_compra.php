<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php require "html/head.php"; ?>
</head>
	<!--  -->
	<body>
		<?php 
            include "html/header.php";
            include_once "src/conexao.php";
            include_once "src/protect.php";
			include_once "src/model/Produto.php";
            include_once "src/model/Estoque.php";
            
            $id = $_SESSION['id'];
		?>
		<main>
			<h1>REGISTRO DE COMPRA</h1>
            <?php 
                if(isset($_SESSION['carrinho'])) : 
            $sql_code = "SELECT * FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto IN (";    
            ?>
			<div class="table-responsive">
				<table class = "table table-bordered align-middle">
					<tr>
						<th width='50'> FOTO </th>
						<th width=""> NOME </th>
						<th width="80"> TIPO </th>
						<th width="100"> CATEGORIA </th>
						<th> FABRICANTE </th>
						<th width="50"> QTD </th>
						<th> VALOR </th>
						<th> TOTAL </th>
						<th width="60"> AÇÃO </th>
					</tr>
					<?php 
						$totalCompra = 0;
                        foreach($_SESSION['carrinho'] as $key => $value) : 
                            $sql_code = $sql_code.unserialize($value['obj'])->getProduto()->getIdProduto().",";
                    ?>
					<tr>
							<td><img width = "50" src="<?=unserialize($value['obj'])->getProduto()->getFoto()?>"></td>
							<td><?=unserialize($value['obj'])->getProduto()->getNome()?></td>
							<td><?=unserialize($value['obj'])->getProduto()->getTipo()?></td>
							<td><?=unserialize($value['obj'])->getProduto()->getCategoria()?></td>
							<td><?=unserialize($value['obj'])->getProduto()->getFabricante()?></td>
							<td><?=$value['qtd']?></td>
							<td><?=number_format($value['valor'],2,',','.')?></td>
							<?php
								$totalProduto = $value['qtd']*$value['valor']; 
								$totalCompra = $totalCompra + $totalProduto;
							?>
							<td><?=number_format($totalProduto,2,',','.')?></td>
							<td><a id="excluir" href="?remover=<?= $key ?>" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Excluir"><i class="bi bi-trash text-danger" style='font-size: 1.5rem' ></i></a></td>
							
							
					</tr>
                    <?php 
                        endforeach;
                        $sql_code = substr($sql_code, 0, (strlen($sql_code)-1)).');';
                    ?>
					<tr>
						<td colspan='7' style='text-align:right'><strong>TOTAL</strong></td>
						<td colspan='2' style='text-align:center'><strong><?=number_format($totalCompra,2,',','.') ?></strong></td>
					</tr>
				</table>
					<?php else: 
								echo "<h3 style='text-align:center; margin-top:50px'>Carrinho vazio!</h3>";
                        endif;
                        $podeRegistrar = true;
                        $texto = 'Não possuímos o(s) produto(s) selecionado(s) em estoque: ';
                        $sql_query = $conexao->query($sql_code);
                        $lista = [];
                        if($sql_query->num_rows > 0){
                            $lista = $sql_query->fetch_all(MYSQLI_ASSOC);
                        }
                        foreach($lista as $registro){
                            $qtdSolicitada = $_SESSION['carrinho'][$registro['idproduto']]['qtd'];
                            if(0 < $qtdSolicitada){
                                $podeRegistrar = false;
                                $texto = $texto.'\\n'.$qtdSolicitada.' - '.$registro['nome'];
                            }else{
                                //SQL PARA REGISTRAR NAS 2 TABELAS (ESTOQUE E HISTORICO_COMPRA)
                            }
                        }
                        if($podeRegistrar){
                            echo "<script> alert('REGISTRADO!');</script>";
                        }else{
                            echo "<script> alert('".$texto."');</script>";
                        }
					?>
			</div>
			<hr>
			<div style='text-align:center;'>
				<a href="produtos.php" type='button' class='btn btn-success btn-lg'>Continuar Comprando</a>
				<a href="registro_compra.php" type='button' class='btn btn-primary btn-lg'>Finalizar Compras</a>
			</div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		<script src="src/js/tooltip.js"></script>

</body>

</html>