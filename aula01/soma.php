<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 
        $nome="Vegeta";
        $sexo="masculino";
        $idade="35";
        $num1=$_GET["var1"];
        echo "<h3>primeiro número é $num1</h3>";
        $num2=$_GET["var2"];
        echo "<h3>segundo número é $num2</h3>";
        if($num1+$num2>9000){
            printf("<h1>It's over 9000!</h1>");
        }elseif($num1+$num2>8000){
            printf("<h2>A soma </h2><h1>é mais de 8000!</h1>");
        };

    
        printf("</br><strong>resultado da soma dos dois números é de ".$num1 + $num2."!</strong>");

        printf("</br>resultado da subtração dos números é ".$num1-$num2."!");
       
        printf("</br>resultado da multiplicação dos números é ".$num1*$num2."!");       

        printf("</br>resultado da divisão dos números é ".$num1/$num2."!");

        printf("</br>resultado do módulo (resto da divisão) dos números é ".$num1 % $num2."!");

        echo "<h1> O nome dele é $nome, do sexo $sexo e tem $idade anos";

    
    ?>
    </div>
</body>
</html>