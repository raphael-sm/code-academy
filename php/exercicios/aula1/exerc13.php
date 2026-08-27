<?php
    $precoOriginal = 250.0;
    $desconto = 15;
    $descontado = $precoOriginal - ($precoOriginal* ($desconto / 100));
    echo "Preço Final: R$" .
        number_format($descontado,2,",",".") . ". " .
        ($descontado < 200 ? "Compra Barata." : "Compra Cara")
?>