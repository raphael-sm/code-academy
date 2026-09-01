<?php
    $str = "abcdefghij";

    echo mb_substr($str, 0, 3) . "<br>";
    echo mb_substr($str, 3, 4) . "<br>";
    echo mb_substr($str, (mb_strlen($str)-2), 2) . "<br>";
?>