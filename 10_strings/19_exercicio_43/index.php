<?php

    $strArray = "carro - navio - helicóptero - barco - jangada";

    $arrString = explode("-", $strArray);

    print_r($arrString);

    for($i = 0; $i < count($arrString); $i++){
        echo $arrString[$i] . "<br>";
    }

?>