<?php

    class Operadores{

        function soma($num1, $num2){
            $soma = $num1 + $num2;
            echo $soma . "<br>";
        }

        function sub($num1, $num2){
            $sub = $num1 - $num2;
            echo $sub . "<br>";

        }

        function mult($num1, $num2){
            $mult = $num1 * $num2;
            echo $mult . "<br>";
        }

        function div($num1, $num2){
            $div = $num1 / $num2;
            echo $div . "<br>";
        }


    }

    $operacao = new Operadores;
    $operacao->soma(5, 5);
    $operacao->sub(15, 5);
    $operacao->mult(2, 5);
    $operacao->div(100, 10);


?>