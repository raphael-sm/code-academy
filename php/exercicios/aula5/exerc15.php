<?php
    $precos = [100, 250, 80, 320, 150];

    $precosDescontados = array_map(fn($preco) => $preco*0.90, $precos);

    echo "Preços com desconto: [" . implode(", ", $precosDescontados) . "] <br>";
    echo "Preços sem desconto: [" . implode(", ", $precos) . "] <br>";
?>