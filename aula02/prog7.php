<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Pagamento</title>
</head>
<body>
    <div>
        <h3>Formas de Pagamento</h3>
        <form action="prog7r.php" method="post">
            Valor a ser pago:<br>
            <input type="number" name="valor"><br>
            Forma de pagamento:<br>
            <select name="pag">
                <option value="vista">à Vista</option>
                <option value="parc">Parcelado</option>
            </select><br>
            Número de parcelas: <br>
            <select name="vezes">
                <option value="1">1x</option>
                <option value="2">2x</option>
                <option value="3">3x</option>
                <option value="4">4x</option>
                <option value="5">5x</option>
                <option value="6">6x</option>
                <option value="7">7x</option>
                <option value="8">8x</option>
                <option value="9">9x</option>
                <option value="10">10x</option>
            </select><br>
            <input type="submit" value="Calcular">
        </form>
    </div>
    
</body>
</html>