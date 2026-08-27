<?php
    $valorTotal = 1899.90;
    $numParcelas = 6;
    $valorParcela = $valorTotal / $numParcelas;

    echo floor($valorParcela) . "<br>"; // Arredonda para baixo, não importa o valor.
    echo round($valorParcela, 2) . "<br>"; // Arrendonda para duas casas decimais(o correto a se fazer.)
    echo ceil($valorParcela) . "<br>"; // Arredonda para cima, não importa o valor.

    echo "No Final, não se perde nenhum centavo. Mas, após o cálculo(de acordo com o computador), sobram R$". number_format(($valorTotal - (round($valorParcela,2)*6)), 13, ",",".") . ", que pode ser 'varrido debaixo do tapete' como um erro de precisão ponto flutuante.";
?>