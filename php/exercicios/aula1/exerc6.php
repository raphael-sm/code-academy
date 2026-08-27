<?php
    $x = "10";
    $y = 10;

    
    echo $x == $y ? "true" : "false"; // compara se os VALORES são *iguais*, e como "10" e 10 são iguais em valor, retorna true.

    echo "<br>";

    echo $x === $y ? "true" : "false"; // compara se o VALOR e TIPO são *iguais*, e como um é string e o outro é inteiro, retorna false.

    echo "<br>";

    echo $x != $y ? "true" : "false"; // compara se os VALORES são *diferentes*, e como "10" e 10 são iguais em valor, retorna false.

    echo "<br>";

    echo $x !== $y ? "true" : "false";// compara se o VALOR e TIPO são *diferentes*, e como um é string e o outro é inteiro, retorna true.
?> 