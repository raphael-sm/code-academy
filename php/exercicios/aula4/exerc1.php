<?php
    $frase1 = "Aprender PHP eh divertido!";
    $frase2 = "Aprender PHP é divertido!";
    echo strlen($frase1) . "<br>";
    echo mb_strlen($frase2); // Como 'é" são 2 bytes internamente, é necessário usar o mb_strlen em vez do strlen para contar adequadamente a quantidade de caracteres.
?>  