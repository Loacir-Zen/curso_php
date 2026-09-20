<?php

    function velocidadeMaxima($vel){

    if(is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    }else{
        echo "Por favor, passe um número inteiro <br>";
    }
        
    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    $velocidade = 225;

    velocidadeMaxima($velocidade);

    //PHP ignora o parâmetro desnecessário;

    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");

    //mais parâmetros
    function descreverAnimal($nome, $raca){
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bill", "Beagle");
    descreverAnimal("Rafa", "Vira-Lata");


?>