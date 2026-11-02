<?php

    class Car{

        function andar(){
            echo "Estou andando <br>";
        }

    }

    $fusca = new Car;
    $fusca->andar();
    $bmw = new Car;
    $bmw->andar();
    $volvo = new Car;
    $volvo->andar();
?>