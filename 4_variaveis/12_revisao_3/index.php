<?php

    $numArray = ["10", "20", "30", "40", "50"];
    $nome = "Loacir";

    echo "$nome <br>";

    function teste(){

        global $nome;
        $nome = "Loacir Zen de Brito";
        echo "$nome <br>";   

    }

    teste();

    function testando(){
        static $num;
        $num ++;
        echo $num;
    }

    testando();
    testando();
    testando();

    class Pessoa{

        function falar(){
            echo "Olá, tudo bem <br>";
        }

    }
    echo "<br>";
    $loacir = new Pessoa();
    $loacir->falar();

    print_r($numArray);


?>
