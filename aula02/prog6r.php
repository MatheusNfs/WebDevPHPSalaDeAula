<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Aula Form Get e Post</title>
</head>
<body>
    <div>
        <h3>Cadastro de Usuário</h3>
        <?php
            $login=$_POST["login"];
            $senha=$_POST["senha"];
            $perfil=$_POST["perfil"];

            echo "<h3>Informações do usuário</h3>";

            echo "Login: $login, senha: $senha, perfil: $perfil";
        ?>
        <br>
        <br>
        <a href="prog6.php">Voltar</a>

    </div>
</body>
</html>