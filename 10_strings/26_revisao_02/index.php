<?php

    $arr = [
        'porta' => 200,
        'maçaneta' => 20,
        'motor' => 2000,
        'retrovisor' => 8
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