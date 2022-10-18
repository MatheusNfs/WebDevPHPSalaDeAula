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
            include "funcoes.php";
            breakline(1);
            write_text("ESTE TEXTO FOI PREDITO PELA LADY JESSICA DAS BENE GESSERITS");
            breakline(1);
            escreva_texto();
            today();
            echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
            breakline(2);
            echo "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<";
            breakline(2);
            soma(1,2);
            breakline(1);
            sub(4,2);
            breakline(1);
            mult(2,3);
            breakline(1);
            div(0, 10);

        ?>
        </pre>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>