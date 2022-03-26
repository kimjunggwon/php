<?php
    $num = 1;
    echo "\$num의 데이터형(값 {$num})은 ". gettype($num);
    echo "<br>";

    $greeting = "Hello";
    echo "\$greeting의 데이터형(값 {$greeting})은 " . gettype($greeting);
    echo "<br>";

    $numStr = "123456";
    echo "\$numStr의 데이터형(값 {$numStr})은 " . gettype($numStr);
    echo "<br>";

    $array = array();
    echo "\$array의 데이터형은 " . gettype($array);
    echo "<br>";

    $null = null;
    echo "\$null의 데이터형(값 {$null})은 " . gettype($null);
    echo "<br>";

    $boolean = true;
    echo "\$boolean의 데이터형(값 {$boolean})은 " . gettype($boolean);
?>