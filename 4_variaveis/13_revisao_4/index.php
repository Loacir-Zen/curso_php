<?php


    $num = 0;
    $numArray = ["10", "20", "30", "40", "50"];

    class Pessoa{

        function falar(){
            echo "Olá, tudo bem";
        }

    }

    $loacir = new Pessoa;
    $loacir->falar();

    echo "<br>";

    function teste(){
        global $num;
        echo "$num <br>";
    }

    function testando(){
        static $numStatic = 0;
        $numStatic ++;
        echo "$numStatic <br>";
    }

    function varParametro($num1, $num2){
        $num = $num1 + $num2;
        echo "$num <br>";

    }

    teste();
    testando();
    testando();
    testando();

    varParametro(10, 25);

    $num4 =& $num;
    $num4 = 50;
    echo "$num<br>";

    echo "<br>";
    print_r($numArray);

    echo"$numArray[1]<br>";

?>