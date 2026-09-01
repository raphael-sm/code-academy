<?php
    $lista = "João, Maria, Pedro, Ana";
    $arr = explode(", ", $lista);

    foreach($arr as $a){
        echo $a . "<br>";
    }
?>