<?php
    $primos = [];

    function checkPrime($i){

        if($i<=1){
            return false;
        }

        if($i<=3){
            return true;
        }

        if($i%2===0 or $i%3===0){
            return false;
        }

        for($j=2; $j<=floor(sqrt($i));$j++){
            if($i%$j==0){
                return false;
            }
        }

        return true;
    }

    for($i = 1; $i <= 50; $i++){
        if(checkPrime($i) == true){
            $primos[] = $i;
        }
    }

    echo implode(", ", $primos);
?>