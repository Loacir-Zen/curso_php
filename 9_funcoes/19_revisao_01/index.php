<?php

    class Pessoa{

        function falar($nome){

            return "Bem-vindo $nome";

        }

    }

    $loacir = new Pessoa;

    $falar = $loacir->falar("Loacir");

    echo $falar;
?>