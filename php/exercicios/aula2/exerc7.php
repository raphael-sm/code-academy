<?php
    $peso = 75;
    $altura = 1.80;
    $imc = $peso/($altura*$altura);

    if($imc<=18.5){
        echo "Você está abaixo do peso.";
    } else if ($imc < 25) {
        echo "Você está no peso normal.";
    } else if ($imc < 30) {
        echo "Você está acima do peso.";
    } else {
        echo "Você está obeso.";
    }
?>