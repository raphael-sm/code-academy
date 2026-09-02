<?php
    $frase = "PHP eh uma linguagem popular para desenvolvimento web";
    $arr = explode(" ", $frase);

    echo "A frase '$frase' tem " . count($arr) . " palavras <br>";
    echo "[ " . implode(", ", $arr) . " ]";
?>