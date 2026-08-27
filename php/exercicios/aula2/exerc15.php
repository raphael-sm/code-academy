<?php
    $numero = 10;

    if($numero%3===0 && $numero%5===0){
        echo "FizzBuzz";
    } else if($numero%3===0){
        echo "Fizz";
    } else if($numero%5===0){
        echo "Buzz";
    } else {
        echo $numero;
    }
?>