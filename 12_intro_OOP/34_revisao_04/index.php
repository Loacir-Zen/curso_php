<?php

    class Carro{

        public $velocidadeMaxima;


        function setVelocidadeMaxima($velocidade){
            return $this->velocidadeMaxima = $velocidade;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade Máxima é de $this->velocidadeMaxima Km/h";
        }

    }

    $volkswagen = new Carro;
    $volkswagen->setVelocidadeMaxima(220);
    $volkswagen->getVelocidadeMaxima();

?>