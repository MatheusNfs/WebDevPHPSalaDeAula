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

		//SELECT idproduto, nome, (SELECT SUM(qtd) FROM estoque WHERE registro = 'ENTRADA' AND id_produto = '$id') - (SELECT SUM(qtd) FROM estoque WHERE registro = 'SAÍDA' AND id_produto = '$id') AS saldo FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto = '$id';  

		$sql_code = "SELECT * FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto = '$id'";
		$sql_query = $conexao->query($sql_code);

		$listaProdutos = [];
		if($sql_query->num_rows > 0){
			$listaProdutos = $sql_query->fetch_all(MYSQLI_ASSOC);
		}
				
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
					//while($produto = $sql_query->fetch_assoc()){
					foreach($listaProdutos as $produto ):
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
					<?php endforeach;?>
				</tr>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td><strong>TOTAL EM ESTOQUE</strong></td>
				 <?php
					
					
					$sql_entrada = "SELECT SUM(qtd) as Total1 FROM estoque WHERE registro = 'ENTRADA' AND id_produto = $id";
					$sql_saida = "SELECT SUM(qtd) as Total2 FROM estoque WHERE registro = 'SAÍDA' AND id_produto = $id";
					$totalEntrada = $conexao->query($sql_entrada);
					$totalSaida = $conexao->query($sql_saida);
					
					$temp = $totalEntrada->fetch_assoc();
					$temp2 = $totalSaida->fetch_assoc();
					
					$total = (isset($temp['Total1'])? $temp['Total1'] : 0 )  - (isset($temp2['Total2'])? $temp2['Total2'] : 0);
						
				
				?>
				 <td><?php echo $total; ?></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
			</table>
			<div class="container-fluid">
            <h3>Registro de Produto</h3>
            <form class="row g-3 container-fluid" action="src/controller/estoque_bd/editarEstoque.php" method="post">

                <input type="text" class="form-control" id="id_produto" name="id_produto" value="<?php echo $id ?>" hidden>

                <div class="col-md-2 col-sm-12">
                    <label for="qtdid" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="qtdid" name="qtd" value="" required>
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="regid" class="form-label">Registro</label>
                    <select class="form-select" id="regid" name="registro" required>
                        <option selected disabled value="">Selecione</option>
                        <option value="ENTRADA">ENTRADA</option>
                        <option value="SAÍDA">SAÍDA</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-12">
                    <label for="dtid" class="form-label">Data</label>
                    <input type="date" class="form-control" id="dtid" name="data_registro" value="" required>
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="valorid" class="form-label">Valor Compara Unitário</label>
                    <input type="number" class="form-control" id="valorid" name="valor_compra" value="" required tern="[0-9] ([,\.][0-9] )?" min="0" step="any">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="valorid" class="form-label">Valor Venda Unitário</label>
                    <input type="number" class="form-control" id="valorid" name="valor_venda" value="" required tern="[0-9] ([,\.][0-9] )?" min="0" step="any">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
                    <button class="btn btn-primary" type="submit" id="btn-on">Cadastrar</button>
                </div>
            </form>
        </div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>