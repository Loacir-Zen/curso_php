<?php

    class Pessoa{

        function falar($nome){

            return 'Ola ' . $nome;
        }

    }

    $loacir = new Pessoa();

    $falar = $loacir->falar('Loacir');
    echo $falar

?>