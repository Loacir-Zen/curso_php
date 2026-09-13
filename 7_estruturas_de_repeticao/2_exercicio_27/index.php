<?php

    $varArray = [10, "Loacir", 1.25, "Zen", 20, "de", 1.50, "Brito", 50, 1.7];
    $cont = 0;
    while($cont <= 9){
        if(is_string($varArray[$cont])){
            echo $varArray[$cont] . "<br>";
        }
        $cont = $cont + 1;
    }

?>