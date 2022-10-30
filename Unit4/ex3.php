<?php
    $name1 = 'vŨ    văN thƯơNg';
    $name2 = explode(" ",$name1);
    $name3 = implode(" ",$name2);
    $name4 = strtolower($name3);
    $name5 = ucwords($name4);
    echo "$name5 <br>";
