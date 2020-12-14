<meta charset="utf-8">
<?php
    session_start();

    $_SESSION['mysession1'] = 'everdevel';
    $_SESSION['mysession2'] = 'beanscent';
    $_SESSION['mysession3'] = 'tomodevel';   

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
    //세션 존재 여부 확인

    if(session_destroy()){
        echo "세션 삭제 완료";
    }else{
        echo "세션 삭제 실패";
    }
    /*
    session_destroy() : 모든 세션 삭제
    */



?>