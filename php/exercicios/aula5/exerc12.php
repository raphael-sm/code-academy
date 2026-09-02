<?php
    $fila = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto'];

    $fila = array_reverse($fila);
    print_r($fila);
    echo "<br><br>";
    $fila = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto'];
    $reverso = [];
    for($i=count($fila)-1;$i>=0;$i--){
        array_push($reverso, $fila[$i]);
    }
    print_r($reverso);
?>  