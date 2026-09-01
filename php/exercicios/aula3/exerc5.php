<?php
    $original = "PHP é Legal";

    $tam = mb_strlen($original)-1;
    $copia = mb_str_split($original);
    $arr = mb_str_split($original);

    for($i = $tam; $i >= 0; $i--){
        $arr[$i] = $copia[$tam-$i];
    }
    
    echo implode("", $arr);
?>