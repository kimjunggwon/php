<meta charset="utf-8">
<?php
    echo "2020년 01월 01일 9시 15분 10초의 타임스탬프는? <br>";
    $timeStamp = mktime(9, 15, 10, 1, 1, 2020);
    echo $timeStamp;
    //mktime() : 특정 시간을 타임스탬프 형태로 반환
    //mktime() 구조 : mktime(시, 분, 초, 월, 일, 년)
?>