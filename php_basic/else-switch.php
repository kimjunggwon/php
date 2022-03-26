<?php
    $test1 = "test1";
    $test2 = "test2";

    if($test1 == "test2"){
        echo "test2 출력";
    }else switch($test2){
        case "test1":
            echo "switch else test1 출력";
        break;
        
        case "test2":
            echo "switch else test2 출력";
        break;

        case "test3":
            echo "switch else test3 출력";
        break;

        default :
            echo "모두 맞지 않습니다.";
    }
?>