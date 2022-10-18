<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Array</title>
</head>
<body>
    <div>
        <h1 style="text-align: center;">
            ARRAYS
        </h1>
        <hr>
        <pre> 

        <?php 
            // $c = array(12, 13, 1978, 70, 22);
            // // echo $c[2];
            // print_r($c);

            // $a[0] = 10;
            // $a[1] = 15;
            // $a[2] = 13;
            // $a[3] = 22;
            // $a[4] = 14;
            // $a[5] = 16;
            
            // print_r($a);
            
            // $a[]=75;   
            // print_r($a);

            $b= range (1, 10, 1);
            // print_r($b);
            $b[]=55;
            $size=count($b);
            echo "Tamanho do array: ".count($b);
            echo "<br>";
            for($c=0; $c<$size; $c++){
                echo "[$c] => $b[$c]<br>";
            }


            ?>
        </pre>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>