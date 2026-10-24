<?php

    class Pessoa{

        function falar($nome){

            //echo "Olá $nome";

            return "Olá $nome";
        }

    }

    $loacir = new Pessoa;
    $saudacao = $loacir->falar('Loacir');
    echo $saudacao;
?>