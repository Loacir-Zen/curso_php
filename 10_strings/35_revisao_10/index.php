<?php

    $arr = [
        'motor' => 5000,
        'porta' => 2000,
        'maçaneta' => 50,
        'retrovisor' => 70,
    ];

    function itensCaros($arr){
        $arrItensCaros = [];

        foreach($arr as $itens => $preco){
            if($preco > 100){
                array_push($arrItensCaros, $itens);
            }
        }

        return $arrItensCaros;
    }

    $novoArray = itensCaros($arr);
    print_r($novoArray);

?>