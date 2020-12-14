<meta charset="utf-8">
<?php
    $isDateCheck = checkdate(12,10,2020);
    
    if($isDateCheck){
        echo "유효한 날짜입니다.";
    }else{
        echo "유효하지 않은 날짜입니다.";
    }
    //checkdate() : 날짜가 유효한 값인지 확인하는 함수
    //checkdate() 구조 : checkdate(월, 일, 년)
?>