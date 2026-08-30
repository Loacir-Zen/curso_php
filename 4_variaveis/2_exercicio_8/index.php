<?php

    class Pessoa{


        function falar(){
            echo "Olá pessoas";
        }

    }

    $loacir = new Pessoa;

    $loacir->nome = "Loacir";
    $loacir->idade = 35;
    $loacir->altura = 1.65;

    echo $loacir->nome;
    echo "<br>";
    echo $loacir->idade;
    echo "<br>";
    echo $loacir->altura;


?>