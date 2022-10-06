<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <p style="text-align: center;">
            Exercitando condições de múltiplos casos com switch.
        </p>
        <p>Escreva um número, de acordo com a sua escolha, veja o resultado da operação aritimiética.</p>
        <?php 
            $n=$_POST["num"];
            $op=$_POST["op"];

            switch($op){
                case 1: 
                    $resp=$n*2;
                break;
                case 2:
                    $resp=pow($n,3);
                break;
                case 3:
                    $resp=sqrt($n);
            }
            
            echo "O resultado da operação solicitada foi: $resp";

        ?>
        <br>
        <br>
        <a href="Switch.html"><i class="bi bi-caret-left-square-fill" style="font-size:2rem;"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>