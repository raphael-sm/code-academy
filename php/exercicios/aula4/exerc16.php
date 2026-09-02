<?php
    $string = "O PHP eh uma linguagem de programação server-side";

    if(mb_ereg_match(".*server-side.*", $string)){
        echo "Contém 'server-side'";
    } else {
        echo "Não contém 'server-side'";
    }

    echo "<br>";

    if(mb_ereg_match(".*client-side.*", $string)){
        echo "Contém 'client-side'";
    } else {
        echo "Não contém 'client-side'";
    }
?>