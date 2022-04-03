<?php
    session_start();

    if(isset($_SESSION['testsession'])){
        echo "testsession 세션이 존재합니다.";

        unset($_SESSION['testsession']);
    }else{
        echo "testsession 세션이 존재하지 않습니다.";
    }

    echo "<br>";
    echo "testsession 세션의 값 : {$_SESSION['testsession']}";
?>