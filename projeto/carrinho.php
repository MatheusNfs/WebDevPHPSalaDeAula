<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php require "html/head.php"; ?>
</head>
	<!--  -->
	<body>
		<?php 
			include "html/header.php";
			include_once "src/model/Produto.php";
			include_once "src/model/Estoque.php";
		?>
		<main>
			<h1>Carrinho de Compras</h1>
			<?php if(isset($_SESSION['carrinho'])) : ?>
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
						foreach($_SESSION['carrinho'] as $key => $value) : ?>
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
					<?php endforeach;?>
					<tr>
						<td colspan='7' style='text-align:right'><strong>TOTAL</strong></td>
						<td colspan='2' style='text-align:center'><strong><?=number_format($totalCompra,2,',','.') ?></strong></td>
					</tr>
				</table>
					<?php else: 
								echo "<h3 style='text-align:center; margin-top:50px'>Carrinho vazio!</h3>";
						endif;
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