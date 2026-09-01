<?php
    function EhPalindromo($palavra){
        $array_caracteres = mb_str_split($palavra);
        $palavraReversa = implode('', array_reverse($array_caracteres));
        if (mb_strtolower($palavraReversa) === mb_strtolower($palavra)) {
            echo "$palavra é um palíndromo! <br>";
        } else {
            echo "$palavra não é um palíndromo. <br>";
        }
    }

    EhPalindromo("arara");
    EhPalindromo("laravel")
?>