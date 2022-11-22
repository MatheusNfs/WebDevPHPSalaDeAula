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
						<?php
							if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "G"){
								$idc = $cliente['idcliente'];
								echo "<a href='#?id=$idc'; data-bs-toggle='modal' data-bs-target='#excluir_modal'>EXCLUIR</a>";
							}
						?>					
						
					</td>
					<td>
					<div class="modal fade" id="excluir_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="src/controller/cliente_bd/excluirCliente.php" method="post" >
									<div class="modal-body">
									<input type="text" value="<?=$cliente['idcliente'];?>">
									<h2 style="text-align: center;">Deseja realmente excluir este cliente? <?= $cliente['nome']; ?></h2>	
														
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
										<button type="submit" class="btn btn-danger">Confirmar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
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