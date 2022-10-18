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
            Funções de Array
        </h1>
        <hr>
        <pre> 

        <?php 
            $a = array("A", "B", "C", "D", "E");
            print_r($a);
            $size = count($a);
            echo "Tamanho do array - count(array): ".$size;
            echo "<br>";

            echo "Coloca um novo elemneto no final do array: array[] = 'dado';";
            $a[]="F";
            print_r($a);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";

            echo "Coloca um novo dado no elemento final do array_push(array,'dado');";
            array_push($a, "G");
            echo "<br>";
            print_r($a);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";
            
            echo "Elimina o último elemento do array: array_pop(array)";
            array_pop($a);
            print_r($a);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";

            echo "Remove uma posição do vetor unset(array[posição]);";
            unset($a[0]);
            echo "<br>";
            print_r($a);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";

            echo "Coloca um novo elemento no início do array:array_unshift(array, 'dado');";
            array_unshift($a, "a");
            echo "<br>";
            print_r($a);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";

            echo "Elimina o primeiro elemento do array: array_shift(array);";
            array_shift($a);
            echo "<br>";
            print_r($a);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";

            echo "Ordenação:sort(array) = Ordena elementos do array";
            $b = array("E","C","D","B","A");
            echo "<br>";
            print_r($b);
            echo "<br>";
            
            echo "sort() - Ordem crescente";
            sort($b);
            print_r($b);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";
            
            echo "rsort() - Ordem decrescente";
            rsort($b);
            print_r($b);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";

            echo "ksort(array) = Ordena os elementos do array, pelo índices 'key'";
            $c = array(4=>"A", 3=>"B", 2=>"C", 1=>"D", 0=>"E");
            echo "<br>";
            print_r($c);
            echo "<br>";
            ksort($c);
            print_r($c);
            echo "<br>";
            echo "------------------------------------";
            echo "<br>";
            
            echo "var_dump(array) - Mostra informações sobre variável";
            var_dump($c);

            ?>
        </pre>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>