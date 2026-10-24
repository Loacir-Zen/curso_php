<?php

    $nome = "Loacir";
    $idade = 36;
    $altura = 1.62;
    $peso = 110;

    $pessoa = compact("nome", "idade", "altura", "peso");

    print_r($pessoa);

    foreach($pessoa as $caracteristica => $value){

        echo "$caracteristica: $value" . "<br>";

    }

?>