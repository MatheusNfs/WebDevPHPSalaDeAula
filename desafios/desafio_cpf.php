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
    <script>
        function validar(){
            var msg = "";
            var flag = 0;

            if(f.nome.value==""){
                flag = 1;
                msg = "Preencha o campo Nome!";                   
            }
            if(f.cpf.value==""){
                flag = 1;
                msg = msg + "<br>Preencha o campo CPF!";                   
            }
            if(f.email.value==""){
                flag = 1;
                msg = msg + "<br>Preencha o campo E-mail!";                   
            }
            if(f.tel.value==""){
                flag = 1;
                msg = msg + "<br>Preencha o campo Telefone!";                   
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
        function mascara(i){
            // console.log(i);
            // console.log(i.value);
            var v = i.value;
            if(isNaN(v[v.length -1])){
                i.value = v.substring(0, v.length -1);
                return;
            }
            i.setAttribute("maxlength", 14);
            if(v.length==3 || v.length==7){i.value +=".";}
            if(v.length==11){ i.value+="-";}
        }
    </script>
</head>
<body>
    <div>
        <h3 style="text-align: center;">
            Cadastro de Aluno
        </h3>
        <hr>
        <section id="resposta" class="alert alert-danger" role="alert" style="display:none;">
            
        </section>
        <form action="desafio_cpf_R.php" method="post" name="f" onsubmit="return validar()">
        <br>
        <label class="form-label">Nome:</label>
        <input type="text" name="nome" class="form-control">
        
        <label class="form-label">CPF:</label> 
        <input type="text" name="cpf" class="form-control"  oninput="mascara(this)">
        
        <label class="form-label">E-mail:</label>
        <input type="email" name="email" class="form-control">
        
        <label class="form-label">Telefone:</label>
        <input type="text" name="tel" class="form-control">

        <br>
        <input type="submit" value="SEND IT" class="btn btn-primary">
        
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>