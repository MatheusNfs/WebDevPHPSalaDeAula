<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
	require "html/head.php";
	if(!isset($_SESSION)){
		session_start();
	}
?>
<script>
	function confirma() {
			if (f.senha.value == "") {

				document.getElementById("divConfirma").style.display = 'none';
			} else {
				document.getElementById("divConfirma").style.display = 'block';
			}
		}

		function verifica() {

			if (f.senha.value == f.senha2.value) {
				document.getElementById("erro").style.display = 'none';
				document.getElementById("btn-off").style.display = 'none';
				document.getElementById("btn-on").style.display = 'block';
				<?php $res = false ?>
			} else {
				document.getElementById("erro").style.display = 'block';
				document.getElementById("btn-off").style.display = 'block';
				document.getElementById("btn-on").style.display = 'none';
				<?php $res = true ?>

			}

		}
</script>
</head>
	<!--  -->
	<body>
		<?php 
			include "html/header.php";
			require_once "src/conexao.php";
			require_once "src/model/Cliente.php";

			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			if($id>0){
				$sql_code = "SELECT * FROM cliente WHERE idcliente = '$id'";
				$sql_query = $conexao->query($sql_code);
				
				if($sql_query->num_rows>0){
					$cliente = $sql_query->fetch_assoc();
				}else{
					header("Location: index.php");
				}
			} else{
				header ("Location : index.php");
			}

			
			
		?>
		<main>
        <div class="container-fluid">
			<h3>Edição de Clientes</h3>
			<form class="row g-3 container-fluid" name="f" action="src/controller/cliente_bd/editarCliente.php" method="post">
				
				<input type="text" id="id" name="idcliente" value="<?=$cliente['idcliente'];?>" hidden>
				
				<div class="col-md-6 col-sm-12">
					<label for="nome_id" class="form-label">Nome completo</label>
					<input type="text" class="form-control" id="nome_id" name="nome" value="<?=$cliente['nome'];?>" required>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="email_id" class="form-label">E-mail</label>
					<div class="input-group">
						<span class="input-group-text" id="inputGroupPrepend2">@</span>
						<input type="email" class="form-control" id="email_id" name="email" value="<?=$cliente['email'];?>" aria-describedby="inputGroupPrepend2" required>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="cpf_id" class="form-label">CPF</label>
					<input type="cpf" class="form-control" id="cpf_id" name="cpf" value="<?=$cliente['cpf'];?>" required>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="or_id" class="form-label">Orgão</label>
					<input type="text" class="form-control" id="or_id" name="orgao" value="<?=$cliente['orgao'];?>" required>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="rg_id" class="form-label">Identidade</label>
					<input type="text" class="form-control" id="rg_id" name="rg" value="<?=$cliente['rg'];?>" required>
				</div>
				<div class="col-md-3 col-sm-12">
					<label for="dtnasci" class="form-label">Data de nascimento</label>
					<input type="date" class="form-control" id="dtnasci" name="nascimento" value="<?=$cliente['data_nascimento'];?>" required>
				</div>
				<div class="col-md-3 col-sm-12">
					<label for="estadoc" class="form-label">Estado civil</label>
					<select class="form-select" id="estadoc" name="estado_civil" required>
						<option disabled value="">Selecione</option>
						<option value="Solteiro(a)" <?php if($cliente['estado_civil']=="Solteiro(a)"){ echo 'selected'; }?>>Solteiro(a)</option>
						<option value="Casado(a)" <?php if($cliente['estado_civil']=="Casado(a)"){ echo 'selected'; }?>>Casado(a)</option>
						<option value="Divorciado(a)" <?php if($cliente['estado_civil']=="Divorciado(a)"){ echo 'selected'; }?>>Divorciado(a)</option>
						<option value="Viuvo(a)" <?php if($cliente['estado_civil']=="Viuvo(a)"){ echo 'selected'; }?>>Viuvo(a)</option>
					</select>
				</div>
				<div class="col-md-6 col-sm-12">
					<label class="form-label">Sexo</label><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id1" value="M" <?php if($cliente['sexo']=="M"){ echo 'checked'; }?>>
						<label class="form-check-label" for="sexo_id1">
							Masculino
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input"  type="radio" name="sexo" id="sexo_id2" value="F" <?php if($cliente['sexo']=="F"){ echo 'checked'; }?>>
						<label class="form-check-label" for="sexo_id2">
							Feminino
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id3" value="O" <?php if($cliente['sexo']=="O"){ echo 'checked'; }?> >
						<label class="form-check-label" for="sexo_id3">
							Outros
						</label>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="sen1" class="form-label">Senha</label>
					<input type="password" class="form-control" id="sen1" onblur="confirma()" name="senha" value="<?=$cliente['senha'];?>" required>
				</div>
				<div class="col-md-6 col-sm-12" id="divConfirma" style="display: none">
					<label for="sen2" class="form-label">Confirmação senha</label>
					<input type="password" class="form-control" id="sen2" onblur="verifica()" name="senha2" value="<?=$cliente['senha'];?>" required>
					<div id="erro" class="invalid-feedback" style="display: none">
						Senhas divergentes.
					</div>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">ALTERAR</button>
					<button class="btn btn-primary" type="submit" id="btn-on" >ALTERAR</button>
				</div>
			</form>
		</div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>