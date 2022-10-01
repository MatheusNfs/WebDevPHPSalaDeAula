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
        <form action="prog6r.php" method="post">
            Login:<br>
            <input type="text" name="login"><br>
            Senha: <br>
            <input type="password" name="senha"><br>
            Perfil: <br>
            <select name="perfil">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select><br>
            <input type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>