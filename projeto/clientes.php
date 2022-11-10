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
		
		$lista=[];
		$sql_code = "SELECT * FROM cliente";
		$sql_query = $conexao->query($sql_code);

		if($sql_query->num_rows > 0){
			$lista = $sql_query->fetch_all(MYSQLI_ASSOC);
			// var_dump($lista);
		}
		if(!isset($_SESSION)){
			session_start();
		}
		$id = isset($_SESSION['id']) ? $_SESSION['id'] : 0;
		$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : 0;

		echo "ID: $id - Cliente $nome";
		
		
		?>
		<main>
			<h1>Clientes</h1>
			<h3>Lista de cadastrados</h3>
			<div class="table-responsive">
			<table class = "table table-bordered">
				<tr>
					<th scope="col"> ID </th>
					<th scope="col"> NOME </th>
					<th scope="col"> NASCIMENTO </th>
					<th scope="col"> ORGAO </th>
					<th scope="col"> IDENTIDADE </th>
					<th scope="col"> CPF </th>
					<th scope="col"> ESTADO CIVIL </th>
					<th scope="col"> SEXO </th>
					<th scope="col"> EMAIL </th>
					<th scope="col"> ATIVO </th>
					<th scope="col"> AÇÃO </th>
				</tr>
				<?php 
				foreach($lista as $cliente):
					
					?>
				<tr>
					<td><?= $cliente["idcliente"]; ?></td>
					<td><?= $cliente["nome"];?></td>
					<td><?= $cliente["data_nascimento"]; ?></td>
					<td><?= $cliente["orgao"]; ?></td>
					<td><?= $cliente["rg"]; ?></td>
					<td><?= $cliente["cpf"]; ?></td>
					<td><?= $cliente["estado_civil"]; ?></td>
					<td><?= $cliente["sexo"]; ?></td>
					<td><?= $cliente["email"]; ?></td>
					<td><?= $cliente["ativo"]; ?></td>
					<td>
						<a href="edicaoCliente.php?id=<?=$cliente["idcliente"]; ?>">EDITAR</a>
						<a href="excluirCliente.php?id=<?=$cliente["idcliente"]; ?>">EXCLUIR</a>
						
					</td>
					
				<?php endforeach ?>	
				</tr>
			</table>
			</div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>