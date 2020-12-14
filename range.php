<?php
    $num = range(1,10);
    //1 ~ 10까지 배열로 입력

    echo "<pre>";
    var_dump($num);
    echo "</pre>";

    $num2 = range(1,10,3);
    //1~10까지 3의 간격으로 배열로 입력
    echo "<pre>";
    var_dump($num2);
    echo "</pre>";

    //range() : 배열의 특정 범위를 만드는 함수
    //range(시작하는 수, 끝나는 수, 간격)

?>