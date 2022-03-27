<?php
    $randNum = rand(1, 3);
    $text = '';

    switch($randNum){
        case 1 :
            $text = '1이 출력되었습니다.';
        break;

        case 2 :
            $text = '2가 출력되었습니다.';
        break;

        case 3 :
            $text = '3이 출력되었습니다.';
        break;

        default :
            $text = '';
        break;
    }

    echo "rand 함수에서 출력된 값 : {$text}";
?>