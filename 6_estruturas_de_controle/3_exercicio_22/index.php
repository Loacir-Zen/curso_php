<?php

    $idadeFulano = 16;
    $idadeBeltrano = 18;
    $idadeCiclano = 22;

    $maiorIdade = 18;
    $msg = "É maior de idade";

    if($idadeFulano >= $maiorIdade){
        echo "Fulano " . "$msg" . "<br>";
    }
    
    if($idadeBeltrano >= $maiorIdade){
        echo "Beltrano " . "$msg" . "<br>";
    }

    if($idadeCiclano >= $maiorIdade){
        echo "Ciclano " . "$msg" . "<br>";
    }

?>