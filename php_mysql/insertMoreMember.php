<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "INSERT INTO member(userid, name, password, ";
    $sql .= "email, birthday, gender, reg_date) VALUES ";

    $member = array();

    $member[0] = "('test1', 'test1', 'test123!',";
    $member[0] .= "'test1@test.com', '2017-01-01', 'w', NOW())";

    $member[1] = "('test2', 'test2', 'test123@',";
    $member[1] .= "'test2@test.com', '2018-01-01', 'm', NOW())";

    $member[2] = "('test3', 'test3', 'test123#',";
    $member[2] .= "'test3@test.com', '2019-01-01', 'w', NOW())";

    $member[3] = "('test4', 'test4', 'test123$',";
    $member[3] .= "'test4@test.com', '2020-01-01', 'm', NOW())";

    foreach($member as $m){
        $query = $sql.$m;

        $res = $dbConnect -> query($query);

        if($res){
            echo "데이터 입력 성공<br>";
        }else{
            echo "데이터 입력 실패<br>";
        }
    }
?>