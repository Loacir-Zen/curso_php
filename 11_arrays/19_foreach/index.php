<?php
    $loacir = [
        'nome' => 'Loacir',
        'idade' => 36,
        'profissao' => 'Programador',
    ];

    $alexia = [
        'nome' => 'Aléxia',
        'idade' => 25,
        'profissao' => 'Eng. Civil',
    ];


    foreach($loacir as $carac => $value){
        echo "$carac => $value <br>";
    }

    foreach($alexia as $value){
        echo "$value <br>";
    }
?>