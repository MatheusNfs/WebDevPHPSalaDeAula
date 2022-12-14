<?php
	$login = isset($_COOKIE['login']) ? $_COOKIE['login'] : '';
?>
<header>
			<section>
				<figure id="logo">
					<img src="img/favicon.ico" alt="Logo">
				</figure>
				<input type="text" name="buscar" id="buscar" placeholder="Busque aqui" >
				<h1 id="textoEnviamos">Enviamos produtos para todo o território nacional.</h1>
				<figure style="border: none">
					<img id="carrinho" src="img/carrinhoCompra.png" alt="">
					<?php 
						if(!isset($_SESSION)){
							session_start();
						}
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