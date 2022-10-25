<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Aluno</title>
   
</head>
<body>
    <div>
       <?php
        require_once "desafio_cpf_funcoes.php";

        $nome=$_POST["nome"];
        $cpf=$_POST["cpf"];
        $email=$_POST["email"];
        $tel=$_POST["tel"];

        
        if(verifica_cpf($cpf)){
            echo "Nome: $nome <br>";
            echo "CPF: $cpf <br>";
            echo "E-mail: $email <br>";
            echo "Telefone: $tel <br>";
            
            date_default_timezone_set("America/Sao_Paulo");
            
            //Processo de gravação em arquivo, a+ cria arquivo
            $arquivo = fopen("dados.txt", "a+");
            //Escrevendo no arquivo
            fwrite($arquivo, "Dados do Aluno - Cadastro realizado em: ".date("d/mY")." as ".date("H:i:s"));
            fwrite($arquivo, "\nNome: ".$nome);
            fwrite($arquivo, "\nCPF: ".$cpf);
            fwrite($arquivo, "\nE-mail: ".$email);
            fwrite($arquivo, "\nTelefone: ".$tel);
            fwrite($arquivo, "\n---------------------------------------\n\n");
            fclose($arquivo); //fecha o arquivo
        }else{
            echo "<br><h3 style='text-align: center;'>CPF INVÁLIDO!</h3>";
        }

        
           
       
       ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>