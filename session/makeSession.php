<meta charset="utf-8">
<?php
    session_start();

    $_SESSION['userid'] = 'everdevel';

    if(isset($_SESSION['userid'])){
        echo "세션 생성 완료 세션 userid의 값 : {$_SESSION['userid']}"; 
    }else{
        echo "세션 생성 실패";
    }

    /*
    세션(Session)?
     - 쿠키와 같은 역할이지만 해당 정보는 서버에서 저장
    session_start() : 세션을 사용하기 위한 함수이며 가장 상단에 위치에 있어야 되는 함수
    */
?>