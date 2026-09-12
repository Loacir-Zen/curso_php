<?php

    class Pessoa{


        function falar($falando){
            echo $falando;
        }


        function maior($x , $y){
            if($x > $y){
                echo "$x é maior que $y <br>";
            }
        }

        function identico ($num1, $num2){
            if ($num1 === $num2){
                echo "$num1 é identico a $num2 <br>";
            }
        }

    }

    $loacir = new Pessoa;
    $loacir->falar("Olá, bom dia<br>");
    $loacir->maior(10, 5);
    $loacir->identico(15, 15);

?>