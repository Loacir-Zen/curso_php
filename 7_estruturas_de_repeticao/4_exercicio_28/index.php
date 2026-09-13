<?php

$count = 4;
    while($count <= 30){
        echo "O count vale $count" . "<br>";
        if($count === 24){
            break;
        }

        $count += 2;
    }

?>