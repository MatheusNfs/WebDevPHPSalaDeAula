<!DOCTYPE html>
<?php
    require_once "conexao.php";

    if(isset($_POST["email"]) || isset($_POST["senha"])){
        if(strlen($_POST["email"])==0){
            echo "Preencha seu e-mail";
        }elseif(strlen($_POST["senha"])==0){
            echo "Preencha a sua senha";
        }else{
            $email = $conexao->real_escape_string($_POST["email"]);//retorna uma string sem caracteres especiais
            $senha = $conexao->real_escape_string($_POST["senha"]);

            $sql_code = "select * from usuario where login = '$email' and senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: ".$conexao->error);
            // qtd de linhas retornada
            $qtd = $sql_query->num_rows;
            if($qtd==1){
                $usuario = $sql_query->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario["id"];
                $_SESSION['nome'] = $usuario["nome"];
                header("Location: login.php"); // redireciona para a página
            } else{
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>login</title>
   
</head>
<body>
    <div>
        <h3 style="text-align: center;">
            Login
        </h3>
        <hr>
        <section id="resposta" class="alert alert-danger" role="alert" style="display:none;">
            
        </section>
        <form action="" method="post">
        <br>

        <label class="form-label">E-mail:</label>
        <input type="email" name="email" class="form-control">
        
        <label class="form-label">Senha:</label>
        <input type="password" name="senha" class="form-control">

        <br>
        <input type="submit" value="LOGIN" class="btn btn-primary">
        
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>