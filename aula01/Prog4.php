<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

        $num1=$_GET["num1"];
        echo "</br><h3>primeiro número é $num1</h3>";
        $num2=$_GET["num2"];
        echo "</br><h3>segundo número é $num2</h3>";
        if($num1+$num2>8000){
            printf("<h2>A soma </h2><h1>é mais de 8000!</h1>");
        }
        printf("<h2>resultado da soma dos dois números é de ".$num1 + $num2."</h2>");

    
    ?>

</body>
</html>