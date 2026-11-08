<?php

    class Carro{

        public $cor;
        public $marca;
        public $modelo;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel){
             $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima dete carro é : $this->velocidadeMaxima km/h <br>";

        }

    }


    $bmw = new Carro;

    $bmw->cor = "Branca";
    $bmw->marca = "BMW";
    $bmw->modelo = "BMW X7";
    $bmw->setVelocidadeMaxima(240);
    $bmw->getVelocidadeMaxima();



    $ferrari = new Carro;

    $ferrari->cor = "Vermelho";
    $ferrari->marca = "Ferrari";
    $ferrari->modelo = "Amalfi";
    $ferrari->setVelocidadeMaxima(280);
    $ferrari->getVelocidadeMaxima();
?>