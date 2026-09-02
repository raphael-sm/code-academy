<?php
    $numeros = [8,16,24,32,40,48,56,64];
    echo "Este array tem " . count($numeros) . " elementos <br>";
    $c = 0;
    foreach($numeros as $a){
        if ($a > 10){
            $c++;
        }
    }
    echo "Existem $c números maior que 10";
?>