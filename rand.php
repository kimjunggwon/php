<meta charset="utf-8">
<?php
    $randNum = rand(1,3);
    $kawibawibo = '';

    switch($randNum){
        case 1:
            $kawibawibo = '가위';
        break;
        case 2:
            $kawibawibo = '바위';
        break;
        case 3:
            $kawibawibo = '보';
        break;
        default : 
            $kawibawibo = '';
        break;
    }
    echo "컴퓨터의 선택은 : {$kawibawibo}";
    //rand() : 인자의 값으로 랜덤한 값이 저장이 되는 함수
    //rand()구조 : rand(시작할 값, 끝날 값)
?>