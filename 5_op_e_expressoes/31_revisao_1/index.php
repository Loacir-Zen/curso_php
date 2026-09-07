<?php

    $numX = 10;
    $numY = 20;

    class Pessoa{

        function falar(){
            echo "Olá, tudo bem <br>";
        }

        function teste(){
            global $numX;
            $numX = 20;
            echo $numX . "<br>";   
        }

        function maior($x , $y){

            if($x > $y){
                echo "x é maior que y<br>";
            }
        }

        function menor($x , $y){
            if($x < $y){
                echo "x é menor que y<br>";
            }
        }

        function not(){
            if(!(5 < 2)){
                echo "false que virou true<br>"; 
            }
        }

        function or(){
            if(5>10 || 15>10){
                echo "Entrou na função or<br>";
            }
        }

        function and(){
            if(50 >10 && 15>10){
                echo "Entrou na função and<br>";
            }
        }

        function igual($nomeUm, $nomeDois ){
            if ($nomeUm === $nomeDois){
                echo "É igual";
            }

        }

    }

    $loacir = new Pessoa;
    $loacir->falar();
    $loacir->teste();
    $loacir->maior(50, 5);
    $loacir->menor(0, 5);
    $loacir->not();
    $loacir->or();
    $loacir->and();
    $loacir->igual("Loacir", "Loacir");

?>