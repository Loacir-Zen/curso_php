<?php

    class Pessoa{

       // $altura = 1.65;


        function falar($saudacao){

            echo "$saudacao" . "<br>";

        }

        function maior($numX, $numY){

            if($numX > $numY){
                echo "$numX é maior que $numY" . "<br>";
            }

        }

        function identico($numX, $numY){
            if ($numX === $numY){
                echo "$numX é identico a $numY" . "<br>";
            }
        }

        function varGlobal(){
            global $altura;
            $altura = 1.65;
            echo "A atura é de $altura" . "<br>";
        }

        function varStatic(){
            static $numStatic = 0;
            $numStatic ++;
            echo " $numStatic" . "<br>";
        }

    }

    $loacir = new Pessoa;
    $loacir->falar("Olá, Boa tarde");
    $loacir->maior(15, 10);
    $loacir->identico(25,25);
    $loacir->varGlobal();
    $loacir->varStatic();
    $loacir->varStatic();
    $loacir->varStatic();

?>