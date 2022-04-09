<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $reviewList = array();
    $reviewList[0] = [1, 'test1 내용입니다.'];
    $reviewList[1] = [2, 'test2 내용입니다.'];
    $reviewList[2] = [3, 'test3 내용입니다.'];
    $reviewList[3] = [4, 'test4 내용입니다.'];

    $cnt = 0;

    foreach($reviewList as $rl){
        $sql = "INSERT INTO prodReview(memberid, content, reg_date)";
        $sql .= "VALUES ({$rl[0]}, '{$rl[1]}', NOW())";

        $result = $dbConnect -> query($sql);
        $cnt++;

        if($result){
            echo $cnt.'데이터 입력 성공'.'<br>';
        }else{
            echo $cnt.'데이터 입력 실패'.'<br>';
        }
    }
?>