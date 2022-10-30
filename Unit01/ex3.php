<?php
    function checkPrimeNumber($n){
        if($n < 2){
            return false;
        };
        for($i = 2; $i <= $n - 1; $i++){
            if($n % $i == 0){
                return false;
            }
        };
        return true;
    };
    for($i = 1; $i <= 100; $i++){
        if(checkPrimeNumber($i)){
            echo "<br> $i";
        }
    }
?>