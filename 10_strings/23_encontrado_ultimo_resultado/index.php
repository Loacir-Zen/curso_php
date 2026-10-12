<?php

    $frase = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $indeceString = strrpos($frase, "strpos");

    echo $indeceString . "<br>";


    if(strrpos($frase, "Java") === false){
        echo "Palavra não encontrada<br>";
    }

    $p = substr($frase, strpos($frase, "método"), 6);
    echo "$p <br>";

?>