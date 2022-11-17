<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>
	<link rel="stylesheet" href="orbit-1.2.3/orbit-1.2.3.css" type="text/css" />
    <script src="orbit-1.2.3/jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="orbit-1.2.3/jquery.orbit-1.2.3.js" type="text/javascript"></script>
    
    <script type="text/javascript">
     $(window).load(function() {
         $('#banner').orbit();
     });
	</script>
</head>
	<!--  -->
<body>
		<?php 
		include "html/header.php";
		require_once "src/conexao.php";

		$sql_code1 = "SELECT * FROM produtos WHERE tipo = 'HARDWARE' ORDER BY idproduto DESC LIMIT 1";
		$sql_query1 = $conexao->query($sql_code1) or die("Falha na execução do código SQL:".$conexao->error."<br>");

		$sql_code2 = "SELECT * FROM produtos WHERE tipo = 'PERIFÉRICOS' ORDER BY idproduto DESC LIMIT 1";
		$sql_query2 = $conexao->query($sql_code2) or die("Falha na execução do código SQL:".$conexao->error."<br>");
		
		$lista = [];

		if($sql_query1->num_rows > 0){
			$prod1 = $sql_query1 -> fetch_assoc();
			$lista[] = $prod1;
		}
		if($sql_query2->num_rows > 0){
			$prod2 = $sql_query2 -> fetch_assoc();
			$lista[] = $prod2;
		}
		?>
		<div id="banner">
			<img src="img/banner/Banner1.png" alt="">
			<img src="img/banner/Banner2.png" alt="">
			<img src="img/banner/Banner3.png" alt="">
		</div>
		<main>
	 		<div class="row text-center mb-4">
	 			<div class="col-sm-6">
	 				<h3>HARDWARE</h3>
				</div>
	 			<div class="col-sm-6">
	 				<h3>PERIFÉRICOS</h3>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<?php foreach($lista as $produto) : ?>
				<div class="col">
					<div class="card">
						<img src="<?=$produto['foto']?>" class="card-img-top fotoProduto" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?=$produto['nome']?></h5>
							<p class="card-text"><?= substr($produto['descricao'], 0, 100)?>...</p>
							<a href="mais_detalhes.php?id=<?=$produto['idproduto']?>" class="btn btn-primary">Mais Detalhes</a>
						</div>
					</div>			
				</div>
				<?php endforeach; ?>
			</div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>