<?php

    $num = 50;
    $arrVar = ["10", "15", "20", "25"];

    echo "$num <br>";

    function teste(){
       global $num;
       $num = 100;
    }

    function testando(){
        static $numVar = 0;
        $numVar++;
        echo "$numVar <br>";
    }

    class Pessoa{

        function falar(){
            echo "Olá, tudo bem!";
        }

    }


    teste();
    echo "$num <br>";

    testando();
    testando();
    testando();


    $pessoaUm = new Pessoa;
    $pessoaUm->falar();
    echo "<br>";

    print_r($arrVar);
    echo "<br>";
    $segundoVar = $arrVar[1];
    echo "$segundoVar<br>";
?>