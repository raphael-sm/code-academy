<?php
    $a = 0;
    $b = 1;
    echo "$a <br>$b <br>";
    for($i = 0; $i<=13; $i++){
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo "$c <br>";
    }
?>