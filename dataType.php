<?php
    $num = 12; //정수형 선언
    echo $num."의 데이터형 (값{$num})은".gettype($num);
    echo "<br>";

    $greeting = "안녕"; //문자열 선언
    echo $greeting."의 데이터형(값{$greeting})은".gettype($greeting);
    echo "<br>";

    $numStr = "121212"; //값은 숫자지만 큰따옴 표 안에 있어 문자열로 인식
    echo $numStr."의 데이터형(값{$numStr})은".gettype($numStr);
    echo "<br>";

    $fruit = array(); //배열 선언
    echo $fruit."의 데이터형(값{$fruit})은".gettype($fruit);
    echo "<br>";

    $nai = null; // 없는 값 = null을 선언
    echo $nai."의 데이터형(값{$nai})은".gettype($nai);
    echo "<br>";

    $boolean = true; //논리값 선언
    echo $boolean."의 데이터형(값{$boolean})은".gettype($boolean);

    //gettype() : 인자의 값에 대해서 데이터형을 알려주는 함수
?>