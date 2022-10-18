<?php
    date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set("America/Sao_Paulo");
    echo date_default_timezone_get();
    echo "<br>";

    function escreva_texto(){
        echo "<p style='text-align:center;'>Minha primeira função em PHP, ao som do L-L-Lambdanerds</p>";
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