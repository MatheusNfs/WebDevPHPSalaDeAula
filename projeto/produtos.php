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

		$buscado = isset($_GET['buscar'])? $_GET['buscar'] : '';
		$buscaEsp = isset($_GET['buscaesp'])? $_GET['buscaesp'] : '';
		$sql_code;

		if($buscado){
			if($buscaEsp){
				$sql_code = "SELECT * FROM produtos WHERE $buscaEsp LIKE '%$buscado%' ORDER BY nome";
			}else{
				$sql_code = "SELECT * FROM produtos WHERE descricao LIKE '%$buscado%' ORDER BY nome";
			}
		}else{
			$sql_code = "SELECT * FROM produtos";
		}
		$sql_query = $conexao->query($sql_code);
		
		if(!isset($_SESSION)){
			SESSION_START();
		}
		?>
		<main>
		<?php
			if(isset($_SESSION['tipo'])){
				echo "<a href='cadastroProduto.php' class='col-1 btn btn-link align-middle' style = 'float:right;'>
				<i class='bi bi-plus-circle' style='font-size: 2rem;'></i>
				<h7 class='align-middle'>Cadastrar</h7>
			</a>";
			}
			?>
		

			<h1>Produtos</h1>
			<h3>Lista de Produtos Cadastrados</h3>
			<?php if($sql_query->num_rows>0): ?>
			<div class="table-responsive">
				<table class = "table table-bordered">
					<tr>
						<th scope="col"> ID </th>
						<th scope="col"> FOTO </th>
						<th scope="col"> NOME </th>
						<th scope="col"> TIPO </th>
						<th scope="col"> CATEGORIA </th>
						<th scope="col"> FABRICANTE </th>
						<th scope="col"> DESCRIÇÃO </th>
						<th scope="col"> AÇÃO </th>
					</tr>
					<?php 
						while($produto = $sql_query->fetch_assoc()){

					?>
					<tr>
							<td><?=$produto['idproduto']?></td>
							<td><img height = "50" src="<?=$produto['foto']?>"></td>
							<td><?=$produto['nome']?></td>
							<td><?=$produto['tipo']?></td>
							<td><?=$produto['categoria']?></td>
							<td><?=$produto['fabricante']?></td>
							<td><?=$produto['descricao']?></td>
							<td><?php
								if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "G"){
									$idProduto = $produto['idproduto'];
									echo "<a href='estoque.php?id=$idProduto'><i class='bi bi-clipboard-plus' style='font-size:1.2rem;' data-bs-toggle='tooltip' data-bs-placement='left' data-bs-title='Estoque'></i></a>";
								}
								?>
								<a href="mais_detalhes.php?id=<?=$produto["idproduto"]; ?>"><i class="bi bi-clipboard-data" style="font-size:1.2rem;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Detalhes"></i></a>
							</td>
					</tr>
						<?php }?>
				</table>
							<?php else: 
								echo "<h3 style='text-align:center; margin-top:50px'>O produto $buscado não foi encontrado!</h3>";
							endif;
							?>

			</div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		<script src="src/js/tooltip.js"></script>

</body>

</html>