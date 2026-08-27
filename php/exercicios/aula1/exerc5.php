<?php
    $celsius = -273.14;
    $farenheit = ($celsius * 9/5)+32;
    $kelvin = $celsius + 273.15;

    echo "Hoje está fazendo <b>".number_format($celsius, 2, ",", ".")."</b>ºC,<b> ".number_format($farenheit, 2, ",",".")."</b>ºF, ou <b>".number_format($kelvin, 2, ",",".")."</b>K";
?>