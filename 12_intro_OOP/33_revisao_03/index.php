<?php

    class Carro{

        public $velocidadeMaxima;

        function setVelocidadeMaxima($velocidade){
            return $this->velocidadeMaxima = $velocidade;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima do carro é: $this->velocidadeMaxima km/h <br>";
        }

    }

    $gol = new Carro;

    $gol->setVelocidadeMaxima(220);
    $gol->getVelocidadeMaxima();


?>