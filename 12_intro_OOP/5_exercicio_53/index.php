<?php

    class Cachorro{

        function latir(){
            echo "Au au <br>";
        }

        function andar($m){
            echo "O cachorro andou $m metros <br>";
        }

    }

    $bill = new Cachorro;
    $bill->latir();
    $bill->andar(5);

?>