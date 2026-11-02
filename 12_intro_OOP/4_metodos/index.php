<?php

    class Pessoa{

        function falar(){
            echo "Olá, eu sou um objeto <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";   
        }

    }

    $loacir = new Pessoa;
    $loacir->falar();
    $loacir->falar();

    $joao = new Pessoa;
    $joao->falar();

    $loacir->somar(5,7);

?>