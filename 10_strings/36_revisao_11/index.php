<?php

    $arr = [
        'Motor' => 5000,
        'porta' => 2000,
        'retrovisor' => 50,
        'maçaneta' => 25,
    ];

    function itensCaro($arr){

        $arrItensCaro = [];

        foreach($arr as $itens => $preco){

            if($preco > 50){

                array_push($arrItensCaro, $itens);

            }

        }
        return $arrItensCaro;

    }

    $novoArray = itensCaro($arr);

    print_r($novoArray);

?>