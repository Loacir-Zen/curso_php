<?php

    $x = 5;

    switch($x){

        case 0:
            echo "X é igual a 0 <br>";
            break;
        case 1:
            echo "x é igual a 1 <br>";
            break;
        default:
            echo "x não é igual a nenhum dos valores mencionado <br>";
    }


    $nome = "Loacir";

    switch($nome){
        case "Loacir":
            echo "O nome é Loacir";
            break;
        case "Matheus":
            echo "O nome é Matheus";
            break;
        default:
            echo "O nome não foi encontrado";
    }

?>