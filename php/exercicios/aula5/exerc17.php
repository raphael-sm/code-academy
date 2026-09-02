<?php
    $estoque = [
        'Camiseta' => 50,
        'Calça' => 30,
        'Tênis' => 15,
        'Boné' => 80,
        'Meia' => 100
    ];

    foreach($estoque as $prod => $quant) {
        echo "$prod <br>";
    }

    echo "<br><br>";

    foreach($estoque as $prod => $quant) {
        echo "$quant <br>";
    }
?>