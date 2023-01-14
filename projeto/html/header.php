<?php
	$login = isset($_COOKIE['login']) ? $_COOKIE['login'] : '';
	if(!isset($_SESSION)){
        session_start();
    }
?>
<header>
			<section>
				<figure id="logo">
					<img src="img/favicon.ico" alt="Logo">
				</figure>
				<form action="produtos.php" method="get">
					<div class="input-group" id="buscar">
						<select class = "form-select" style = "width:10px; background-color:#66e0ff; color:white;" name="buscaesp" id="busca_esp">
							<option selected disabled value="">Selecione</option>
                            <option value="nome">Nome</option>
                            <option value="categoria">Categoria</option>
                            <option value="fabricante">Fabricante</option>
						</select>
						<input type="text" style="width:250px;" class="form-control" name="buscar" placeholder="Busque aqui" required>
						<button class="btn btn-primary" id="btn-buscar"><i class="bi bi-search"></i></button>
					</div>
				</form>	
				<h1 id="textoEnviamos">Enviamos produtos para todo o território nacional.</h1>
				<figure style="border: none">
					<img id="carrinho" src="img/carrinhoCompra<?=(isset($_SESSION['carrinho']))? '2' : ''?>.png" alt="" data-bs-toggle='modal' data-bs-target='#carrinho_modal'>
					<?php 
						// if(!isset($_SESSION)){
						// 	session_start();
						// }
						if(!isset($_SESSION['id'])){
							echo '<img class="cliente" src="img/clientes.png" style="padding:4px;" alt="" data-bs-toggle="modal" data-bs-target="#login_modal">';
						}else{
							echo '<img class="cliente" style="padding:12px;" src="img/logout.png" alt="" data-bs-toggle="modal" data-bs-target="#logout_modal">';
						}		
					?>
					</figure>
			</section>
			
			<?php include "menu.php" ?> 

		</header>
		<div class="modal fade" id="login_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Fazer Login</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/controller/cliente_bd/loginCliente.php" method="post" >
						<div class="modal-body">

							<main id="resposta" class="alert alert-danger" role="alert" style="display: none">
								<!-- A simple danger alert—check it out! -->
							</main>
							<br>

							<label class="form-label">E-mail:</label><br>
							<input type="text" name="email" class="form-control" placeholder="E-mail" value="<?= $login ?>"><br>

							<label class="form-label">Senha:</label><br>
							<input type="password" name="senha" class="form-control"><br>
							
							<div class="form-group">
								<input id="lembrar" name="lembrar" type="checkbox" 
								<?= ($login != '')? 'checked': ''; ?> >
								<label for="lembrar">Lembrar meu e-mail</label>
							</div>
							<!-- <input type="submit" value="Entrar" class="btn btn-primary"> -->
							<br>

							<a href="cadastroCliente.php">Crie o seu CADASTRO</a><br>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="logout_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/logout.php" method="post" >
						<div class="modal-body">

						<h2 style="text-align: center;">Deseja realmente sair?</h2>	
														
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-danger">Confirmar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="funcionario_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Fazer Login</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/controller/funcionario_bd/loginFuncionario.php" method="post" >
						<div class="modal-body">

							<main id="resposta" class="alert alert-danger" role="alert" style="display: none">
								<!-- A simple danger alert—check it out! -->
							</main>
							<br>

							<label class="form-label">E-mail:</label><br>
							<input type="text" name="email" class="form-control" placeholder="E-mail"><br>

							<label class="form-label">Senha:</label><br>
							<input type="password" name="senha" class="form-control"><br>

							<!-- <input type="submit" value="Entrar" class="btn btn-primary"> -->

							<?php 
							if(isset($_SESSION['tipo']) && $_SESSION['tipo'] =='G'){
								echo "<a href='cadastroFuncionario.php'>Cadastro de Funcionário</a><br>";
							} 
								 
						 	?>
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Modal -->
<div class="modal fade" id="carrinho_modal" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h1 class="modal-title fs-5" id="exampleModalPopoversLabel">Carrinho de compras</h1>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
				<?php if(isset($_SESSION['carrinho'])) : ?>
        		<h2 class="fs-5"><?= count($_SESSION['carrinho']) ?> - PRODUTOS NO SEU CARRINHO</h2><br>
        		<?php foreach($_SESSION['carrinho'] as $key => $value) : ?>
            		<div>
                		<a id="excluir" href="?remover=<?= $key ?>"><i class="bi bi-trash text-danger"></i></a>
                		<?= $value['qtd'] .' x '. number_format($value['valor'], 2, ',', '.') ?>= R$ <?= number_format($value['valor'] * $value['qtd'], 2, ',', '.'); ?> - <?= $value['produto']; ?>
            		</div>
            		<div>
            		</div>
       
        			<hr>

				<?php 
					endforeach; 
					endif;
				?>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
        		<a href='carrinho.php' type="button" class="btn btn-primary">IR PARA O CARRINHO</a>
      		</div>
    	</div>
  	</div>
</div>
<?php 
	if(isset($_GET['remover'])){
		$idRemovido = $_GET['remover'];
		unset($_SESSION['carrinho'][$_GET['remover']]);

		if(isset($_SESSION['carrinho'])){
			if(count($_SESSION['carrinho'])==0){
				unset($_SESSION['carrinho']);
			}
		}

		unset($_GET['remover']);
		echo '<script defer>
		let dominio = window.location.host;
		let end = window.location.href;// mais_detalhes.php
		let finalEnd = end.indexOf("."); // posição do caracter "."
		let tamanhoPasta = "/php-m/projeto/".length;
		let pagina = "";
		let posicao = end.indexOf("localhost"); 
		if( posicao >= 0){
			pagina = end.substr((posicao + dominio.length + tamanhoPasta), finalEnd); // mais_detalhes
		} else {
			pagina = end.substr((dominio.length + 1), finalEnd); // mais_detalhes
		}
		pagina = pagina.substr(0, pagina.indexOf("."));
		let idItemRemovido = end.substr(end.indexOf("=")+1, end.length);
		console.log("Domínio: "+ dominio);
		console.log("tamanho do domínio: "+ dominio.length + " + 9 = "+ (dominio.length +9));
		console.log("Tamanho da pasta: "+ tamanhoPasta);
		console.log("Pagina: "+ pagina);
		console.log("Endereço 1: "+ end);
		console.log("Tamanho do Endereço 1: "+ end.length);
		console.log("Posição do Ponto do Endereço 1: "+ end.indexOf("."));
			if(pagina == "mais_detalhes"){
				end = end.substr(0, end.indexOf("?"));
				end = end + "?id=" + idItemRemovido;
				// end = pagina + ".php?id=" + idItemRemovido;
			} else {
				end = end.substr(0, end.indexOf("?"));
				// end = end + "Teste";
			}
	
			console.log("Endereço 2: " + end);
			window.location.href=""+end;
			
		</script>';
	}
?>
<!-- <script>let dominio = window.location.host;
		let end = window.location.href;//mais_detalhes.php
		let finalEnd = end.indexOf('.');//posição do caracter "."
		let tamanhoPasta = '/pHP-M/projeto'.length;
		let pagina;
		let posicao = end.indexOf('localhost'); 
		if( posicao >= 0){
			pagina = end.substr((posicao + dominio.length + tamanhoPasta), finalEnd);
		}else{
			pagina = end.substr((dominio.length + 1),finalEnd);
		}
		pagina = pagina.substr(0, pagina.indexOf('.'));
		let idItemRemovido = end.substr(end.indexOf('=')+1, end.length);
		console.log('Domínio: '+dominio);
		console.log('Tamanho do domínio: '+dominio.length+' + 9 = '+(dominio.length+22));
		console.log('Página: '+pagina);
		console.log('Endereço 1: '+end);
		console.log('Tamanho do Endereço 1: '+end.length);
		console.log('Posição do ponto do endereço 1: '+finalEnd);
			if(pagina == 'mais_detalhes'){
				end = end.substr(0, end.indexOf('?'));
				end = end + '?id='+idItemRemovido;
			}else{
				end = end.substr(0,end.indexOf('?'));
			}
			console.log('Endereço 2: '+end);
			window.location.href = ''+end;
			</script> -->

