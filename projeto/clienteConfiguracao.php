<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
	require "html/head.php";
	
?>

</head>
	<!--  -->
	<body>
		<?php 
			require_once "src/protect.php";
			if(isset($_SESSION['tipo'])){
				header("Location: nao_permitido.php");
				die;
			}		

			include "html/header.php";
			
						
			if(isset($_SESSION['id'])){
				$id = $_SESSION['id'];
				
			}
			$sql_code = "SELECT * FROM cliente LEFT JOIN endereco ON idcliente = endereco.id_cliente LEFT JOIN contatos ON idcliente = contatos.id_cliente WHERE idcliente = '$id'";
			$sql_query = $conexao->query($sql_code);
		?>
		<main>
        <div class="row row-cols-1 row-cols-md-3 g-4">
		<?php $cliente = $sql_query->fetch_assoc()?>
			<a href="edicaoCliente.php?id=<?=$id?>">
				<div class="col">
					<div class="card">
					<i class="bi bi-person-square text-center" style="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center">Dados Pessoais</h5>
							
						</div>
					</div>			
				</div>
			</a>
			<a href="">
				<div class="col">
					<div class="card">
			
						<?php if($cliente['cidade'] == ''){ ?>
					
								<i class="bi bi-house text-center text-danger" style="font-size: 10rem;"></i>
								<div class="card-body">
								<h5 class="card-title text-center">Endereço</h5>
								</div>
						<?php }else{ ?>
								<i class="bi bi-house text-center text-success" style="font-size: 10rem;"></i>
								<div class="card-body">
								<h5 class="card-title text-center">Endereço</h5>
								</div>				
						<?php } ?>
			
					</div>			
				</div>
			</a>
			<a href="">
				<div class="col">
					<div class="card">
					<?php if($cliente['descricao'] == ''){ ?>
						<i class="bi bi-telephone text-center text-danger" style="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center">Contatos</h5>
						</div>
					<?php }else{ ?>
						<i class="bi bi-telephone text-center text-success" style="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center">Contatos</h5>
						</div>			
					<?php } ?>
					
						
					</div>			
				</div>
	
			</a>
			<a href="">
				<div class="col">
					<div class="card">
					<i class="bi bi-table text-center" style="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center">Histórico de Compras</h5>
						</div>
					</div>			
				</div>
			</a>
		
		</div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>