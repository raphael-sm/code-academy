<?php
    $string = "arquivo_relatorio.pdf";

    if(mb_ereg_match("^arquivo.*", $string)){
        echo "Começa com 'arquivo'";
    } else {
        echo "Não começa com 'arquivo'";
    }

    echo "<br>";

    if(mb_ereg_match(".*\.pdf$", $string)){
        echo "É um PDF";
    } else {
        echo "Não é um PDF";
    }
?>