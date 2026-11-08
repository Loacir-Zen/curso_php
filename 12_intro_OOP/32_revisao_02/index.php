<?php

    class Car{

        public $velocidadeMaxima;
        public $cor;

        function setVelocidadeMaxima($velocidade){
            $this->velocidadeMaxima = $velocidade;
        }

        function getVelocidadeMaxima(){
            echo $this->velocidadeMaxima;
        }

    }

    $gol = new Car;

    $gol->setVelocidadeMaxima(200);
    $gol->getVelocidadeMaxima();

?>