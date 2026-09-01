<?php
    $original = "PHP e Legal";

    $tam = strlen($original)-1;
    $copia = $original;

    for($i = $tam; $i >= 0; $i--){
        $original[$i] = $copia[$tam-$i];
    }
    
    echo $original;
?>