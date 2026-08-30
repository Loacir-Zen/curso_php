<?php

    class Pessoa{
        
        function falar(){
            echo "Olá pessoal!";
        }    
    }  
    
    $loacir = new Pessoa();
    
    $loacir->nome = "Loacir";

    echo $loacir->nome;

    echo "<br>";

    echo $loacir->falar();

?>