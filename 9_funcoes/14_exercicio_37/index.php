<?php

    function defineCorCarro($cor = "vermelho"){
        return $cor;
    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";
    $carroCinza = defineCorCarro("cinza");
    echo $carroCinza . "<br>";

    

?>