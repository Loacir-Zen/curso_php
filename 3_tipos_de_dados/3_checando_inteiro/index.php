<?php

    if(is_int(5)){
        echo "É um inteiro <br>";
    }

    if(is_int("Não é um inteiro")){
        echo "É um inteiro <br>";
    }

    $num = 10;
    if(is_int($num)){
        echo "É um inteiro";
    }

?>