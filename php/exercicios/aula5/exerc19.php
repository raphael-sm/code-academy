<?php
    $itens = [
        ['nome' => 'Mouse', 'preco' => 50],
        ['nome' => 'Teclado', 'preco' => 120],
        ['nome' =>  'Monitor', 'preco' => 900],
        ['nome' => 'Headset', 'preco' => 200]
    ];

    $resultado = array_reduce($itens, function ($a, $item){
        return $a + $item['preco'];
    }, 0);

    echo "Valor Total: R\$$resultado";
?>