<?php
    $test = "test1";

    switch($test){
        case 'test1':
            echo '첫 번째가 참입니다.';
        
        case 'test2':
            echo '두 번째가 참입니다.';
        break;

        case 'test3':
            echo '세 번째가 참입니다.';
        break;
        
        default :
            echo "모든 조건이 맞지 않습니다.";
        break;
    }
?>