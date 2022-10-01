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
        <h3>Formas de Pagamento</h3>
        <?php 
            $valor=$_POST["valor"];
            $pag=$_POST["pag"];
            $vezes=$_POST["vezes"];
            $totalparc=$valor*1.15;

            if($pag=="vista"){
                printf("O total a ser pago é ".$valor*0.9." reais<br><br>");
            };
            if($pag=="parc"){
                printf("O total a ser pago é $totalparc reais em $vezes vezes<br><br>");
                printf("O valor da parcela é ". $totalparc/$vezes." reais<br><br>");
            }
        
        ?><br>
        <a href="prog7.php">VOLTAR</a>
    </div>
</body>
</html>