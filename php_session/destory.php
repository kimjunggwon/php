<?php
    session_start();

    $_SESSION['test1'] = "test1";
    $_SESSION['test2'] = "test2";
    $_SESSION['test3'] = "test3";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    if(session_destroy()){
        echo "세션 삭제 완료";
    }else{
        echo "세션 삭제 실패";
    }
?>