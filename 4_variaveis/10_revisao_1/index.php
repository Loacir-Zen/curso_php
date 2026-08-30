<?php

    $nome = "Loacir";

    echo "$nome <br>";

    function teste(){

        global $nome;
        $nome = "Loacir Zen de Brito";
        echo "$nome <br>";

        static $count = 0;
        $count ++;
        echo "$count <br>";

    }


    class Pessoa{

        function falar(){
            echo "Olá, bom dia";
        }

    }

    teste();
    teste();
    teste();

    $loacir = new Pessoa();

    $loacir->$nome = "Loacir";

    $loacir->falar();
    echo "<br>";
    echo $loacir->$nome;
    echo "<br>";

    $numX = 5;
    $numY =& $numX;
    echo "<br>$numY";
    $numY = 10;
    echo "<br>$numX";
?>