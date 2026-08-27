<?php
    $a = -125;
    $b = 563;

    echo "A: $a, B: $b <br>";

    [$a, $b] = [$b, $a];

    echo "A: $a, B: $b <br>";
?>