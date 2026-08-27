<?php
    $x = 42;
    $y = "Olá";
    $z = true;

    function verificarTipoDeDado($var)
    {
        switch(true)
        {
            case is_int($var):
                return "Inteiro";
            case is_string($var):
                return "String";
            case is_bool($var):
                return "Booleana";
            case is_null($var):
                return "Nulo";
            case is_float($var):
                return "Decimal";
            case is_object($var):
                return "Objeto";
        }
    }

    echo "A variável x é um(a) " . verificarTipoDeDado($x) . "<br>";
    echo "A variável y é um(a) " . verificarTipoDeDado($y) . "<br>";
    echo "A variável z é um(a) " . verificarTipoDeDado($z) . "<br>";
?>