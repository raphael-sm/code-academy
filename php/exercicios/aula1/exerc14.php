<?php
    $array = [42, 42.5, "42", true, null, 52];

    foreach($array as $idx => $var) {
        echo "var".($idx+1)." (".var_export($var, true)."):" .
            " is_int? " . (is_int($var) ? "Sim" : "Não") .
            " | is_float? " . (is_float($var) ? "Sim" : "Não") .
            " | is_string? " . (is_string($var) ? "Sim" : "Não") .
            " | is_bool? " . (is_bool($var) ? "Sim" : "Não") .
            " | is_null? " . (is_null($var) ? "Sim" : "Não") .
            " | is_numeric? " . (is_numeric($var) ? "Sim" : "Não");

        echo "<br><br>";
    }
?>