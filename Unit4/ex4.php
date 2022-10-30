<?php
    function checkPalindrome($string){
        if($string == strrev($string)){
            echo $string . " là chuỗi Palindrome";
        } else {
            echo $string . " không phải là chuỗi Palindrome";
        }
    }
    checkPalindrome('hiih');