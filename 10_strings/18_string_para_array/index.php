<?php

    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);

    echo "<br>";

    $fraseArray2 = explode(",", $frase);
    
    print_r($fraseArray2);

    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";

    $fraseArray3 = explode(",", $fraseB);
    
    print_r($fraseArray3);

    echo "<br>";


    for ($i = 0; $i < count($fraseArray3); $i++){
        echo "$fraseArray3[$i] <br>";
    }
?>