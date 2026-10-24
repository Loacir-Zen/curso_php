<?php

    $pessoa = ["Loacir" , 36, "Programador", "castanho"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDosOlhos <br>";
?>