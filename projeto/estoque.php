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

		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$sql_code = "SELECT * FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto = '$id'";
		$sql_query = $conexao->query($sql_code);
				
		?>
		<main>
			<h1>Estoque</h1>
			<h3>Lista de Produtos Cadastrados</h3>
			<table class = "table table-bordered">
				<tr>
					<th scope="col"> ID </th>
					<th scope="col"> FOTO </th>
					<th scope="col"> NOME </th>
					<th scope="col"> TIPO </th>
					<th scope="col"> CATEGORIA </th>
					<th scope="col"> FABRICANTE </th>
					<th scope="col"> QUANTIDADE </th>
					<th scope="col"> REGISTRO </th>
					<th scope="col"> DATA </th>
					<th scope="col"> VALOR COMPRA </th>
					<th scope="col"> VALOR VENDA </th>
					
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
						<td><?=$produto['qtd']?></td>
						<td><?=$produto['registro']?></td>
						<td><?=$produto['data_registro']?></td>
						<td><?=$produto['valor_compra']?></td>
						<td><?=$produto['valor_venda']?></td>
				</tr>
					<?php }?>
			</table>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>