<?php
    $valores = [34, 12, 89, 3, 56, 71, 23];
    $maior = $valores[0];
    $menor = $valores[0];

    foreach($valores as $v) {
        if($v > $maior){
            $maior = $v;
        }
        if($v < $menor) {
            $menor = $v;
        }
    }

    echo "Maior: $maior <br>Menor: $menor";
?>