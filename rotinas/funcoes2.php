<?php
//Funções em PHP (possuem retorno)
function write_text($any){
    return $any;

}
function soma($n1, $n2){
    $r=$n1+$n2;
    $n2=15;
    return $r;
}
function somaV($n1, &$num2){
    $r=$n1+$num2;
    $num2=15;
    return $r;
}
function soma2(){
    $var = func_get_args(); // Pega os argumentos e devolve um array
    $qtd1 = count($var);
    $qtd2 = func_num_args(); //Retorna um numero inteiro que representa a quantidade de argumentos do array; 
    $total=0;
    for($i=0; $i<$qtd1; $i++){
        $total+=$var[$i];
        // echo "$var[$i]";
        // if($i<($qtd1-1)){
        //     echo " + ";
        // }
        // echo $var[$i] . ($i == $qtd1-1 ? " = ": " + ");
    }
    // echo " = $total";
    // echo "$total";
    return $total;
    
    
}
function sub($n1, $n2){
    $r=$n1-$n2;
    return $r;
}
function mult($n1, $n2){
    $r=$n1*$n2;
    return $r;
}

function div($n1, $n2){
    if($n2==0){
        $r = "impossível dividir por zero";
    }else{
        $r=$n1/$n2;    
    }
    return $r;
}
function breakline($nbr){
    // minha solução
    // $n=0;
    // if($nbr>0){
    //     while($n<$nbr){
    //         echo ".<br>";
    //         $n++;
    //     }
    // }else{
    //     echo ".<br>";
    // } 
    // //   resolução do professor n1  
    // if($nbr<1){
    //     echo "*<br>";
    // }else{
    //     for($i=1; $i<=$nbr; $i++){
    //         echo "*<br>";
    //     }
    // }
    // resolução do professor n2 - melhor solução
    do{
        echo "<br>";
        $nbr--;
    }while($nbr>=1);
}