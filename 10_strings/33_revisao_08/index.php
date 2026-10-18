<?php

    $arr = [
        'motor' => 5000,
        'porta' => 1000,
        'maçaneta' => 100,
        'retrovisor' => 20,
    ];


    function itensCaro($arr){

        $arrItensCaro = [];

        foreach($arr as $itens => $preco){

            if($preco > 100){

                array_push($arrItensCaro, $itens);
            }

        }

        return $arrItensCaro;

    }

    $novoArray = itensCaro($arr);

    print_r($novoArray);

?>