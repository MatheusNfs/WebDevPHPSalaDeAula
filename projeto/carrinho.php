<?php 
if(isset($_GET['adicionar'])){
    $idItem = (int)$_GET['adicionar'];
    if($estoque['idproduto'] == $id){
        // echo "produto existente";
        if(isset($_SESSION['carrinho'][$idItem])){
            $_SESSION['carrinho'][$idItem]['qtd']++;
        }else{
            $_SESSION['carrinho'][$idItem] = array(
                'idEstoque' => $idItem, 
                'produto' => $objEstoque->getProduto()->getNome(), 
                'valor' => $objEstoque->getValorVenda(), 
                'qtd' => 1
            );
        }
        echo "<script>alert('O item foi adicionado ao carrinho.');</script>";
    }else{
        die("produto não existe");
    }
}
if(isset($_SESSION['carrinho'])){
    foreach($_SESSION['carrinho'] as $key => $value){
        echo "<br>";
        echo "Produto: ".$value['produto'];
        echo "<br>";
        echo "Key: ".$key;
        echo "<br>";
        echo "QTD: ".$value['qtd'];
        echo "<br>";
        echo "Valor: ".$value['valor'];
        echo "<br>";
        echo "Valor x QTD: ".number_format($value['valor'] * $value['qtd'], 2, ',','.');
        echo "<br><hr>";
    }    
}
?>