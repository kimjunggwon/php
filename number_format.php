<?php
    $num = 123456789;
    echo number_format($num);
    //number_format() : 세자리 마다 콤마를 보여주는 함수
    echo '<br>';

    $num2 = 123456789.794;
    echo number_format($num2, 2);
    //number_format() 구조 : number_format(실수형 변수, 반올림을 할 위치)
    echo '<br>';

    $num3 = 123456789.794;
    echo number_format($num3, 2,"-",":");
    //number_format() 구조 : number_format(실수형 변수, 반올림을 할 위치, 소수점에 표시 문자, 콤마 표시 문자);
?>