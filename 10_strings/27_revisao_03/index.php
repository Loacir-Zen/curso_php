<?php

    $arr = [
        'motor' => 2000,
        'maçaneta' => 20,
        'porta' => 500,
        'retrovisor' => 5,
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