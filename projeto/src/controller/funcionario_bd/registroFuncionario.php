<?php 
			include "../../../html/header.php";
            require_once "../../protect.php";
            require_once "../../conexao.php";
            // require_once "../../src/model/Funcionario.php";
            

			$idFuncionario = isset($_POST["id"]) ? $_POST["id"] : 0;
			$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
			$dataNascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : "";
			$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
			$estadoCivil = isset($_POST["estado_civil"]) ? $_POST["estado_civil"] : "";
		
			$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
			$telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "";
			$email = isset($_POST["email"]) ? $_POST["email"] : "";
			$senha = isset($_POST["senha"]) ? password_hash($_POST["senha"], PASSWORD_DEFAULT) : "";
			$ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : true;

			if(isset($_POST["nome"]) && isset($_POST["senha2"])){
				// $funcionario = new Funcionario(
				// 	$idFuncionario,
				// 	$nome,
				// 	$dataNascimento,
				// 	$cpf,
				// 	$estadoCivil,
				// 	$tipo,
				// 	$telefone,
				// 	$email,
				// 	$senha,
				// 	$ativo
				// );
				
				$sql_code = "INSERT INTO funcionario  VALUES (NULL, '$nome', '$dataNascimento', '$cpf', '$estadoCivil', '$tipo','$telefone', '$email', '$senha', true)";
				$sql_query = $conexao->query($sql_code);
                
                if($sql_query){
                    $sql_code = "SELECT idfuncionario, nome FROM funcionario WHERE cpf='$cpf'";
                    $sql_query = $conexao->query($sql_code);
                    $funcionario = $sql_query->fetch_assoc();
                    $id = $funcionario['idfuncionario'];
                    $nome = $funcionario['nome'];
    
                    header("Location: ../../../cadastroFuncionario.php?gravado=$id");
                    die('Gravado!');
                }else{
                    header("Location: ../../../cadastroFuncionario.php?gravado=0");
                }

            }
            header("Location: ../../../cadastroFuncionario.php");
            
            
