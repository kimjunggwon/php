<?php
    session_start();

    $_SESSION['testsession'] = 'session';

    if(isset($_SESSION['testsession'])){
        echo "세션 생성 완료 세션 testsession의 값 : {$_SESSION['testsession']}";
    }else{
        echo "세션 생성 실패";
    }
?>