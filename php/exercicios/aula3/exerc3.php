<?php
    $notas = [8.5, 6.0, 9.2, 7.8,5.5];
    $soma =  0;
    foreach($notas as $n) {
        $soma += $n;
    }
    $media = $soma / count($notas);
    echo "A média é ".number_format($media, 2, ",",".");
?>