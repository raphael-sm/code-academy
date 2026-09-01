<?php
    $num = "42";
    echo mb_str_pad($num, 5, "0", STR_PAD_LEFT) . "<br>";
    echo mb_str_pad($num, 10, ".", STR_PAD_RIGHT);
?>