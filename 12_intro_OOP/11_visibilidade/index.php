<?php

    class Car {

        public $rodas = 4;
        private $vidro = "Sem película";
        protected $portas = 4;

        public function getVidro(){
            return $this->vidro;
        }

        public function peliculaDeFabrica($pelicula){
            $this->$vidro = $pelicula;
        }

        public function getPortas(){
            return $this->portas;
        }

    }

    class Mecanico{

        public function alterarRodas($obj){
            $obj->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }

    }

    $carro = new Car;
    echo $carro->rodas . "<br>";

    $loacir = new Mecanico;
    $loacir->alterarRodas($carro);
    echo $carro->rodas . "<br>";

    //Não pode alterar porque é privado
    //$loacir->colocarPelicula($carro, "G20");
   
    //$carro->peliculaDeFabrica("G10");
    echo $carro->getVidro() . "<br>";

    //echo $carro->portas . "<br>";
    echo $carro->getPortas() . "<br>";
?>