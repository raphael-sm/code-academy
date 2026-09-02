<?php
    $idades = [12, 18, 25, 15, 30, 17, 21, 16];

    $maiorDeDezoito = array_filter($idades, fn($idade) => $idade >= 18);

    print_r($maiorDeDezoito);
?>