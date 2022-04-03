<?php
    if(isset($_COOKIE['testcookie2'])){
        echo "쿠키 testcookie의 값은 ".$_COOKIE['testcookie2'];
    }else{
        echo "쿠키 testcookie는 존재하지 않습니다.";
    }
?>