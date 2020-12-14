<meta charset="utf-8">
<?php
    if(isset($_COOKIE['memberID'])){
        echo "쿠키 memberID의 값은".$_COOKIE['memberID'];
    }else{
        echo "쿠키 memberID의가 존재하지 않습니다.";
    }

    if(isset($_COOKIE['check'])){
        echo "쿠키 memberID의 값은".$_COOKIE['check'];
    }else{
        echo "쿠키 memberID의가 존재하지 않습니다.";
    }
    /*
    $_COOKIE[] : 생성한 쿠키 값 보기
     - $_COOKIE[] 구조 : $_COOKIE['쿠키명'];
    */
?>