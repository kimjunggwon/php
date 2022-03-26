<?php
    $str = "test1, test2, test3";

    echo ucwords($str);
    
    echo "<br>";

    $str = "test1 test2 test3";
    $str = ucwords($str);
    echo $str;
?>