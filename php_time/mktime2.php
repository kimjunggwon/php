<?php
    $startTime = mktime(0, 0, 0, 1, 1, 2022);

    $endTime = mktime(0, 59, 59, 4, 1, 2022);

    $nowTime = time();

    if($nowTime >= $startTime && $nowTime <= $endTime){
        echo "시작 시간과 종료 시간 사이 값";
    }else{
        echo "시작 시간과 종료 시간 사이의 값이 아닐 때";
    }
?>