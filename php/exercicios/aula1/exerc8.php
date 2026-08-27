<?php
    $valor = "123abc";
    $integer = (int)$valor;
    $float = (float)$valor;
    $boolean = (bool)$valor;

    var_dump($integer);
    echo " - retorna somente os números contidos dentro da variável. <br>";
    var_dump($float);
    echo " - mesmo caso, mas agora como número decimal. <br>";
    var_dump($boolean);
    echo " - como é uma variável com valor e diferente de zero, retorna <i>true</i> e logo, 1.<br>";
    echo "<br>";

    $valor = "";
    $integer = (int)$valor;
    $float = (float)$valor;
    $boolean = (bool)$valor;

    var_dump($integer);
    echo " - retorna somente os números contidos dentro da variável, que nesse caso não há nenhum, então é 0. <br>";
    var_dump($float);
    echo " - mesmo caso. <br>";
    var_dump($boolean);
    echo " - como é uma variável sem valor, retorna <i>false</i> e logo, nada.<br>";
    echo "<br>";

    $valor = "0";
    $integer = (int)$valor;
    $float = (float)$valor;
    $boolean = (bool)$valor;

    var_dump($integer);
    echo " - retorna somente os números contidos dentro da variável, que nesse caso é somente o zero. <br>";
    var_dump($float);
    echo " - mesmo caso. <br>";
    var_dump($boolean);
    echo " - é uma variável existente, mas internamente, 0 == false. logo, o bool vira false.<br>";
    echo "<br>";
?>