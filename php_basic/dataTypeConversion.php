<?php
    $str = "문자열";
    echo "데이터형 변경 전의 데이터형 " . gettype($str)."<br>";

    $str = (int) $str;
    echo "데이터형 변경 후의 데이터형 " . gettype($str)."값은 {$str} <br><br>";

    $str2 = "123문자열";
    echo "데이터형 변경 전의 데이터형 " . gettype($str2)."<br>";

    $str2 = (int) $str2;
    echo "데이터형 변경 후의 데이터형 " . gettype($str2)."값은 {$str2} <br><br>";

    $double = 86.44;
    echo "데이터형 변경 전의 데이터형 " . gettype($double)."<br>";

    $double = (int) $double;
    echo "데이터형 변경 후의 데이터형 " . gettype($double)."값은 {$double}";
?>