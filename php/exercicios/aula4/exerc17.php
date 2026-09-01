<?php
    for($i = 0; $i<=64; $i++){
        $arr[] = chr(random_int(32, 126));
    }
    echo htmlspecialchars(implode("", $arr), ENT_QUOTES, 'UTF-8');
?>