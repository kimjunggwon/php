<meta charset="utf-8">
<?php
    session_start();

    if(isset($_SESSION['userid'])){
        echo 'userid 세션이 존재합니다.';

        unset($_SESSION['userid']);
    }else{
        echo 'userid 세션이 존재하지 않습니다.';
    }

    echo "<br>";
    echo "userid 세션의 값 :{$_SESSION['userid']}";

    /*
    unset() : 세션 삭제 함수
     - unset($_SESSION['세션명']);
    */
?>