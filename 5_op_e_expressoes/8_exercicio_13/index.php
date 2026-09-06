<?php

    class Operacao{

        function moduloExata($num1, $num2){
            $num3 = $num1 % $num2;
            echo $num3 . "<br>";
        }

        function moduloNaoExata($num1, $num2){
            $num3 = $num1 % $num2;
            echo $num3 . "<br>";

        }

    }

    $operadores = new Operacao;
    $operadores->moduloExata(10, 2); 
    $operadores->moduloNaoExata(13, 2); 
?>