<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $score = array();
    $score[0] = [1, 1, 90, 80, 90];
    $score[1] = [2, 1, 85, 90, 80];
    $score[2] = [3, 2, 100, 90, 70];
    $score[3] = [4, 2, 90, 86, 90];

    $cnt = 0;

    foreach($score as $s){
        $sql = "INSERT INTO student";
        $sql .= "(memberid, class, english, math, science)";
        $sql .= " VALUES ({$s[0]}, {$s[1]}, {$s[2]}, {$s[3]}, {$s[4]})";

        $result = $dbConnect -> query($sql);
        $cnt++;

        if($result){
            echo $cnt." 데이터 입력 성공<br>";
        }else{
            echo $cnt." 데이터 입력 실패<br>";
        }
    }
?>