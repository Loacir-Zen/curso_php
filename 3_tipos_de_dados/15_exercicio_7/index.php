<?php

    $pessoa = ['nome' => 'Loacir', 'idade' => 35, 'altura' => 1.65];

    echo $pessoa['nome'];
    echo "<br>";
    echo $pessoa['idade'];
    echo "<br>";
    echo $pessoa['altura'];
    echo "<br>";

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];
    $altura = $pessoa['altura'];

    echo "O nome é $nome, possui $idade anos de idade, e tem $altura de altura";

    echo "<br>";

    if( $pessoa['idade'] >= 18){
        echo "É maior de idade";
    }
?>