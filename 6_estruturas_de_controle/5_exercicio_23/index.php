<?php
    $idadeA = 16;
    $idadeB = 18;
    $idadeC = 25;

    $maiorIdade = 18;
    $msgMaior = "Maior de idade" . "<br>";
    $msgMenor = "Menor de idade" . "<br>";


    if($idadeA >= $maiorIdade){
        echo $msgMaior;
    }else{
        echo $msgMenor; 
    }

    if($idadeB >= $maiorIdade){
        echo $msgMaior;
    }else{
        echo $msgMenor; 
    }


    if($idadeC >= $maiorIdade){
        echo $msgMaior;
    }else{
        echo $msgMenor; 
    }
?>