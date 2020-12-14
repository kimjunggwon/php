<meta charset="utf-8">
<?php
    do{
        echo "이 문구는 1회만 출력돼야 정상입니다.";
    }while(false);
    //처음 echo가 실행이 되고 조건은 false이기 때문에 한 번만 실행
    $i = 0;
    do{
        echo "안녕하세요<br>";
        $i++;
    }while($i < 5);
    //$i의 값은 0이며 처음에 echo가 시작이 되고 $i를 1씩을 증가해서 조건이 만족이 되면 종료
    /*
    do - while문 구조
    do{
        명령문;
    }while(조건문)
    */
?>