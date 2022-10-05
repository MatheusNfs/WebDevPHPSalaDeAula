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
                    echo "TESTE POSITIVO";
                }else{
                    echo "TESTE NEGATIVO";
                };
            }else{
                echo "NÚMERO MENOR QUE ZERO OU NEGATIVO";
            };
        
        ?><BR>
        <a href="Prog5.php">VOLTAR</a>
    </div>
    
</body>
</html>