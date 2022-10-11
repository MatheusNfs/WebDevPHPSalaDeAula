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
        
        <?php
            $n=$_POST["num"];            
            // $n=isset($_POST["num"])? $_POST["num"] : 0 ;
            echo "<h1>$n é primo?</h1>";
            $count=0;
            for($div=1; $div<=$n; $div++){              
                $mod=$n % $div;
                if($mod==0){
                    echo "<h3>dividiu pelo número $div</h3><br>";
                    $count++;
                };
                              
            };
            if($count==2){
                echo "<h3>O número dividiu por $count números</h3><br>";
                echo "<h3>O número $n é primo!</h3>";

            }else{
                echo "<h3>O número dividiu por $count números</h3><br>";
                echo "<h3>O número $n NÃO é primo!</h3>";
            }
            ?>
        <br>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>