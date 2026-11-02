<?php

    class Pessoa{
        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m metros <br>";
        }

    }

    $loacir = new Pessoa;

    $loacir->nome = "Loacir";
    echo $loacir->nome . "<br>";

    $loacir->idade = "36";
    echo $loacir->idade . "<br>";

    $loacir->andar(2000);


?>