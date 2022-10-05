<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Numeros</h3>
        <?php 
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $num3=$_POST["num3"];
            
            if( $num1>$num2 && $num1>$num3){
                printf("Número N1: $num1 é maior que N2: $num2 e N3: $num3");
            }elseif($num2>$num1 && $num2>$num3){
                printf("Número N2: $num2 é maior que N1: $num1 e N3: $num3");
            }else{
                printf("Número N3: $num3 é maior que N1: $num1 e N2: $num2");
            };
            
        
        ?><br>
        <a href="prog6.php">VOLTAR</a>
    </div>
</body>
</html>