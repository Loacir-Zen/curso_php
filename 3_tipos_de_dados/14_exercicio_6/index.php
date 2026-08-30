<?php

    $arr_car = [
        'marca' => 'Nissan', 
        'portas' => 4, 
        'cor' => 'Cinza'
        ];


    echo $arr_car['marca'];
    echo "<br>";
    echo $arr_car['portas'];

    echo "<br>";
    print_r($arr_car);

    $marca = $arr_car['marca'];
    $portas = $arr_car['portas'];

    echo "<br>";
    echo "O carro é da marca $marca, e tem $portas portas"
?>