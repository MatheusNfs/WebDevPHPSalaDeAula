<?php
    date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set("America/Sao_Paulo");
    echo date_default_timezone_get();
    echo "<br>";

    function escreva_texto(){
        echo "<p style='text-align:center;'>O KWISATZ HADERACH! LISAN AL-GAIB!</p>";
    }

    function write_text($thistext){
        echo "<p>$thistext</p>";
    }

    function today(){
        $agora = date('d/m/Y H:i');
        echo "<p style='text-align: center;'>$agora</p>";
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
    function soma($n1, $n2){
        $r=$n1+$n2;
        echo "$n1 + $n2 = $r";
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
            echo $var[$i] . ($i == $qtd1-1 ? " = ": " + ");
        }
        // echo " = $total";
        echo "$total";
        
        
    }
    function sub($n1, $n2){
        $r=$n1-$n2;
        echo "$n1 - $n2 = $r";
    }
    function mult($n1, $n2){
        $r=$n1*$n2;
        echo "$n1 * $n2 = $r";
    }
    function div($n1, $n2){
        if($n2==0){
            echo "Impossível dividir por zero";
        }else{
            $r=$n1/$n2;
            echo "$n1 / $n2 = $r";
        }
    }