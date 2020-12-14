<?php
    $str = "문자열";
    echo "데이터형 변경 전의 데이터형".gettype($str)."<br>";
    //$str에는 문자열인 데이터가 저장이 되어 string
    $str = (int)$str;
    echo "데이터형 변경 후의 데이터형".gettype($str)."값은 {$str} <br>";
    //문자열로 저장된 값을 int로 형변환을 하여 interger로 되지만 값은 정수형이 아니므로 0


    $str2 = "123문자열";
    echo "데이터형 변경 전의 데이터형".gettype($str2)."<br>";
    //$str에는 문자열인 데이터가 저장이 되어 string
    $str2 = (int)$str2;
    echo "데이터형 변경 후의 데이터형".gettype($str2)."값은 {$str2}<br>";
    //문자열로 저장된 값을 int로 형변환을 하여 interger로 되지만 값은 정수형이 포함이 되므로 123

    $double = 86.54;
    echo "데이터형 변경 전의 데이터형".gettype($double)."<br>";
    //$double 숫자이지만 소수가 데이터가 저장이 되어 double
    $double = (int)$double;
    echo "데이터형 변경 후의 데이터형".gettype($double)."값은 {$double}";
    //double형태로 저장을 한 값을 integer로 형변환을 하게 되면 정수 부분이 출력이 되어 86