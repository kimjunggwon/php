<?php
    $num = 16.78;
    $round = round($num, 1);
    echo $round;
    //round() : 숫자를 반올림을 하는 함수
    //round() 구조 : round(반올림할 수, 실수가 저장된 변수)
    echo "<br>";

    $num2 = 12.68;
    $floor = floor($num2);
    echo $floor;
    //floor() : 숫자를 내림을 하는 함수
    echo "<br>";

    $num3 = 12.68;
    $ceil = ceil($num2);
    echo $ceil;
    //ceil() : 숫자를 올림을 하는 함수
?>