<?php
    for($i=1; $i<=100; $i++){
        if($i % 3 ==0){
            echo "<br> fizz";
        } if($i % 5 ==0){
            echo "<br> buzz";
        } if($i % 3 ==0 && $i % 5 ==0){
            echo "<br> fizzbuzz";
        } 
    }
?>