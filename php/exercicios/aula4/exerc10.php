<?php
    $string = "banana";
    $substring = "ana";

    echo $substring . " aparece " . mb_substr_count($string, $substring) . " vezes em " . $string . "<br>";

    echo "A letra A aparece " . mb_substr_count($string, "a") . " vezes em " . $string;
?>