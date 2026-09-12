<?php

    function compararNumeros($numX, $numY){
        if($numX > $numY){
            echo "O primeiro número é maior. <br>";
        }else if ($numX < $numY){
            echo "O segundo número é maior. <br>";
        }else{
            echo "Os números são iguais.<br>";
        }
    }
    
    compararNumeros(5,10);

