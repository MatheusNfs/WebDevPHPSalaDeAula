<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <H1>DIA DE TRABALHO?</H1>
        <fieldset>
            <legend>E É DIA DE...</legend>
            <?php 
                $day=$_POST["day"];
                
                if($day>1 && $day<7){
                    echo "TRABALHAR! BORA! <br>";
                    if($day==2 || $day==4 || $day==6){
                        echo "DIA DE CURSO NO SENAC MARECHAL FLORIANO! ";
                        if($day==6){
                            echo "MAS TÁ ACABANDO, É SEXTA! DIA DA MALDADE!";
                        };
                    };
                }elseif($day==1 || $day==7){
                    echo "FIM DE SEMANA, CARAIO! BORA DORMIR!";
                };
            ?>
            <br><br>
            <a href="trabalho.html"><i class="bi bi-caret-left-square-fill" style="font-size:2rem;"></i></a>            
        </fieldset>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>