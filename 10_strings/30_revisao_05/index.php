<?php

    $arr = [
        'motor' => 5000,
        'porta' => 500,
        'maçaneta' => 30,
        'retrovisor' => 20, 
    ];


    function itensCaro($arr){

        $arrItensCaro = [];

        foreach ($arr as $itens => $preco){

            if($preco > 50){

                array_push($arrItensCaro, $itens);

            }

        }

        return $arrItensCaro;

    }

    $novoArray = itensCaro($arr);
    print_r($novoArray);
?>