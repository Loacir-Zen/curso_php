<?php

    $varUm = "Loacir";
    $varDois = 36;
    $varTres = false;

    $msgTrue = "A variável é um int";
    $msgFalse = "A variável não é um int";

    if(is_int($varUm)){
        echo "$varUm´" . "$msgTrue" . "<br>";
    }else{
        echo "$varUm " . "$msgFalse" . "<br>";
    }

    if(is_int($varDois)){
        echo "$varDois " . "$msgTrue" . "<br>";
    }else{
        echo "$varDois " . "$msgFalse" . "<br>";
    }

    if(is_int($varTres)){
        echo "$varTres " . "$msgTrue" . "<br>";
    }else{
        echo "$varTres " . "$msgFalse" . "<br>";
    }

?>