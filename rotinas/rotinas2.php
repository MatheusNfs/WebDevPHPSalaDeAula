<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Rotinas</title>
</head>
<body>
    <div>
        <h1 style="text-align: center;">
            Procedimentos, Fuções e Métodos
        </h1>
        <h4 style="text-align:center;">Testando Funções</h4>
        <hr>
        <pre> 

        <?php 
            include "funcoes2.php";

            $text = write_text("Esse texto retorna a Arrakis através de return");
            echo $text."<br>";
            
            $n1 = 2;
            $n2 = 4;

            $rsum = soma($n1, $n2);
            echo "resultado da soma-sum é $rsum <br>";
            
            $rsumv = somaV($n1, $n2);
            echo "resultado da soma-sumV é $rsumv <br>";

            $rsoma = soma(2,3);
            echo "resultado da soma é $rsoma <br>";
            
            $rsoma2 = soma2(2,3,4,5);
            echo "resultado da soma2 é $rsoma2 <br>";
            
            $rdiv = div(5,0);
            echo "resultado da divisão é: $rdiv <br>";

            $rmult = mult(10,2);
            echo "resultado da divisão é $rmult <br>";

            $rsub = sub(10, 4);
            echo "resultado da subtração é $rsub";
        ?>
        </pre>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>