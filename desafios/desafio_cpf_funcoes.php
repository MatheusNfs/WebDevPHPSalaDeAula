<?php

function verifica_cpf($cpf){
    
    $cpfr = str_replace(".","",$cpf);
    $cpfn = str_replace("-","",$cpfr);
    $cpf_v = str_split($cpfn);
    
    $result1 = 0;
    $result2 = 0;
    $resultf;
    $i=0;
    $mult = 10;
    $total = 0;
    
    $i2=0;
    $mult2 = 11;
    $total2 = 0;

    //teste primeiro digito

    while($mult>1){
        $total = $total + ($cpf_v[$i]*$mult);
        $mult--;
        $i++;
    };
    for($index=0; $index<=10; $index++){
        if($cpf_v[$index] == $cpf_v[$index+1]){
            $resultf = false;
        }else{
        $resto = $total % 11;
        if($resto<2){
            if($cpf_v[9]==0){
                $result1 = true;
            }else{
                $result1 = false;
                
            }
        }else{
            $check1 = 11 - $resto;
            if($cpf_v[9]==$check1){
                $result1 = true;
            }else{
                $result1 = false;            
            }
        }
        
        //teste segundo dígito
        
        while($mult2>1){
            $total2 = $total2 + ($cpf_v[$i2]*$mult2);
            $mult2--;
            $i2++;
        };
        
        $resto2 = $total2 % 11;
        
        if($resto2<2){
            if($cpf_v[10]==0){
                $result2 = true;
            }else{
                $result2 = false;
            }
        }else{
            $check2 = 11 - $resto2;
            if($cpf_v[10]==$check2){
                $result2 = true;
            }else{
                $result2 = false;
            }
        }
        if($result1 == true && $result2 == true){
            $resultf = true;
        }else{
            $resultf = false;
        }
    }
    return $resultf;
}
}  