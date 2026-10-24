<?php

    $arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

    $itensRemovidos = array_splice($arr, 2, 2);

    print_r($arr);
    echo "<br>";

    print_r($itensRemovidos);
    echo "<br>";

?>