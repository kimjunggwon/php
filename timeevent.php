<meta charset="utf-8">
<?php
    $startTime = mktime(0,0,0,1,1,2019);
    $endTime = mktime(0,59,59,1,1,2019);

    $nowTime = time();

    if($nowTime >= $startTime && $nowTime <= $endTime){
        echo "현재 이벤트에 참여할 수 있는 시간입니다.";
    }else{
        echo "이벤트 시작 전이거나 종료되었습니다.";
    }
?>