<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Teste</h3>
        <?php 
            $num1=$_POST["num1"];

            if($num1>0){
                if($num1>10){
                    echo "<H1>VÁLIDO</H1>";
                }
                echo "<H1>POSITIVO</H1>";
            }else{
                echo "<H1>NÚMERO É ZERO OU NEGATIVO</H1>";
            };
        
            // if($num1<0 || $num1>10){
            //     echo "<h1 style='text-align:center'>Inválido!</h1>";
            // }else{
            //     echo "<h1 style='text-align:center'>Válido!</h1>";
            // };
        ?><BR>
        <a href="Prog6.php">VOLTAR</a>
    </div>
    
</body>
</html>