<?php
    $frase = "Eu gosto de Java";
    $frasenova = mb_ereg_replace("Java", "PHP", $frase);
    echo $frasenova . "<br>";

    $frase2 = "Eu gosto de jAvA";
    $frase2nova = mb_eregi_replace("JaVa", "PHP", $frase2);
    echo $frase2nova;
?>