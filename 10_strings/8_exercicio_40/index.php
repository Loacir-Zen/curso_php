<?php

    $str1 = "O rato roeu a roupa do rei de Roma";

    $count = 0;
    for($i = 0; $i < strlen($str1); $i++){

        if($str1[$i] === "a"){
            $count ++;
        }
    }

    echo "Existem $count a's na string";

?>