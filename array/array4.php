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
            Array com chave personalizada
        </h1>
        <hr>
        <pre> 

        <?php 
            $a = array( "Text" => "A", 3 => "B", 5 => "C", 6 =>"D", 5 =>"3");
            $a[] = 1978;
            print_r($a);
            // echo $a["Text"]."<br>";

            $pessoa = array("nome" => "Matheus", "idade" => 28, "sexo" => "M");
            $pessoa["tem_cnh"] = false;
            print_r($pessoa);
            echo "<br>";

            foreach( $pessoa as $i => $valor){
                if($i == "tem_cnh"){
                    $valor ? $valor = "sim" : $valor = "ainda não";
                }
                echo "[$i] => $valor<br>";
            }
            // if($pessoa["tem_cnh"]==true){
            //     echo "[$i] => Sim <br>";
                
            // }else{
            //     echo "[$i] => Não <br>";
            // }
            ?>
        </pre>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>