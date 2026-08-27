<?php
    $peso = 72.6;
    $altura = 1.82;
    $imc = $peso/($altura*$altura);
    echo "Meu IMC é ".number_format($imc, 2, ",", ".");
?>