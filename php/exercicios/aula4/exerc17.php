<?php
    $charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $charsetArr = mb_str_split($charset);
    shuffle($charsetArr);
    $password = implode("", $charsetArr);
    echo mb_substr($password, 0, 8);
?>