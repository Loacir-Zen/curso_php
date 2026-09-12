<?php

    $varUm = 10;
    $varDois = "loacir";
    $varTres = 55;
    $varQuatro = "zen";

    if(is_int($varUm) || is_float($varUm)){
        $varNum = $varUm * 2;
        if($varNum > 100){
            echo "O numero $varNum é maior que 100<br>";
        }
    }else{
        echo "$varNum não é um numero" . "<br>";
    }

    if(is_int($varDois) || is_float($varDois)){
        $varNum = $varDois * 2;
        if($varNum > 100){
            echo "O numero $varNum é maior que 100<br>";
        }
    }else{
        echo "$varDois não é um numero". "<br>";
    }

    if(is_int($varTres) || is_float($varTres)){
        $varNum = $varTres * 2;
        if($varNum > 100){
            echo "O numero $varNum é maior que 100<br>";
        }
    }else{
        echo "$varTres não é um numero" . "<br>";
    }

    if(is_int($varQuatro) || is_float($varQuatro)){
        $varNum = $varQuatro * 2;
        if($varNum > 100){
            echo "O numero $varNum é maior que 100<br>";
        }
    }else{
        echo "$varQuatro não é um numero" . "<br>";
    }

?>