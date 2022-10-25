!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>login</title>
    <script>
        function validar(){
            var msg = "";
            var flag = 0;

           
            if(f.email.value==""){
                flag = 1;
                msg = msg + "Preencha um e-mail válido!<br>";                   
            }
            if(f.senha.value==""){
                flag = 1;
                msg = msg + "Senha inválida!";                   
            }
            if(flag==0){
                document.getElementById("resposta").style.display = 'none';
                return true;
            }else{
                document.getElementById("resposta").style.display = 'block';
                document.getElementById("resposta").innerHTML = msg;
                return false;
            }
        }
       
    </script>
</head>
<body>
    <div>
        <h3 style="text-align: center;">
            Login
        </h3>
        <hr>
        <section id="resposta" class="alert alert-danger" role="alert" style="display:none;">
            
        </section>
        <form action="" method="post" name="f" onsubmit="return validar()">
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